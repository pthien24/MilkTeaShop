<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }
        $viewData = [];
        $viewData["title"] = "Shopping Cart";
        $viewData["subtitle"] = "Cart";
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('cart.index')->with("viewData", $viewData);
    }
    public function add(Request $request, $id)
    {
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);
        return redirect()->route('cart.index');
    }

    public function delete(Request $request, $id)
    {
        $idToDelete = intval($id);

        if ($idToDelete === 0) {
            $request->session()->forget('products');
        } elseif ($idToDelete > 0) {
            $products = $request->session()->get('products', []);
            if (isset($products[$idToDelete])) {
                unset($products[$idToDelete]);
                $request->session()->put('products', $products);
            }
        }
        return redirect()->route('cart.index');
    }
    public function update(Request $request, $id)
    {
        $idToUpdate = intval($id);
        $newQuantity = $request->input('new_quantity');
        if ($idToUpdate > 0 && $newQuantity >= 0) {
            $products = $request->session()->get('products', []);
            if (isset($products[$idToUpdate])) {
                $products[$idToUpdate] = $newQuantity;
                $request->session()->put('products', $products);
            }
        }
        return redirect()->route('cart.index');
    }
    public function checkout(Request $request)
    {
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }
        $viewData = [];
        $viewData["title"] = "Checkout";
        $viewData["subtitle"] = "Checkout";
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        $viewData["user"] = Auth::user();
        return view('cart.checkout')->with("viewData", $viewData);
    }
    public function purchase(Request $request)
    {
        // Lấy thông tin về các sản phẩm trong giỏ hàng từ session
        $productsInSession = $request->session()->get('products');
        if ($productsInSession) {
            // Lấy ID người dùng hiện tại
            $userId = Auth::user()->getId();
            // Tạo một đơn hàng mới và lưu vào cơ sở dữ liệu
            $order = new Order();
            $order->setUserId($userId);
            $order->setTotal(0);
            $order->setOrderStatus(1);
            $order->setDeliveryAddress(Auth::user()->getAddress());
            $order->setPhoneNumber(Auth::user()->getPhone());
            $order->save();
            // $table->integer('order_status');
            // $table->string('delivery_address');
            // $table->string('phone_number');
            // Tính tổng giá trị đơn hàng
            $total = 0;
            // Lấy thông tin chi tiết sản phẩm từ cơ sở dữ liệu
            $productsInCart = Product::findMany(array_keys($productsInSession));
            foreach ($productsInCart as $product) {
                $quantity = $productsInSession[$product->getId()];
                // Tạo một mục (Item) trong đơn hàng và lưu vào cơ sở dữ liệu
                $item = new Item();
                $item->setQuantity($quantity);
                $item->setPrice($product->getPrice());
                $item->setProductId($product->getId());
                $item->setOrderId($order->getId());
                $item->save();
                // Tính tổng giá trị đơn hàng dựa trên giá và số lượng sản phẩm

                $total = $total + ($product->getPrice() * $quantity);
            }
            // Cập nhật tổng giá trị đơn hàng
            $order->setTotal($total);
            $order->save();

            // Cập nhật số dư tài khoản của người dùng
            $newBalance = Auth::user()->getBalance() - $total;
            Auth::user()->setBalance($newBalance);
            Auth::user()->save();

            // Xóa thông tin về sản phẩm trong giỏ hàng từ session
            $request->session()->forget('products');
            // Chuẩn bị dữ liệu cho view và hiển thị trạng thái mua hàng
            $viewData = [];
            $viewData["title"] = "Purchase - Online Store";
            $viewData["subtitle"] = "Purchase Status";
            $viewData["order"] = $order;

            return view('cart.purchase')->with("viewData", $viewData);
        } else {
            // Nếu giỏ hàng trống, chuyển hướng người dùng về trang giỏ hàng
            return redirect()->route('cart.index');
        }
    }
}
