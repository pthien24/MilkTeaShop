<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title']= 'Admin Page - Category - Milktea shop';
        $viewData['orders'] = Order::all();
        return view('admin.order.index')->with('viewData', $viewData);
    }
    public function editStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1,2,3', // Add any validation rules you need
        ]);
        $order = Order::findOrFail($id);
        $order->order_status = $request->input('status');
        $order->save();
        return redirect()->back();
    }
}
