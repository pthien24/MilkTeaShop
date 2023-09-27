<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // $table->integer('order_status');
    //         $table->string('delivery_address');
    //         $table->string('phone_number');
    public static function validate($request)
    {
        $request->validate([
        "total" => "required|numeric",
        "user_id" => "required|exists:users,id",
        ]);
    }
    public function getOrderStatus()
    {
        $statuscode =  $this->attributes['order_status'];
        if ($statuscode === 1) {
            return "pending";
        } elseif ($statuscode === 2) {
            return "progress";
        } elseif ($statuscode === 3) {
            return "complete";
        }
    }
    public function getNameUser()
    {
        return $this->user->getName() ?? 'Uncategorized'; // Provide a default value if no category is associated
    }
    public function setOrderStatus($order_status)
    {
        $this->attributes['order_status'] = $order_status;
    }

    public function getDeliveryAddress()
    {
        return $this->attributes['delivery_address'];
    }
    public function setDeliveryAddress($delivery_address)
    {
        $this->attributes['delivery_address'] = $delivery_address;
    }

    public function getPhoneNumber()
    {
        return $this->attributes['phone_number'];
    }
    public function setPhoneNumber($phone_number)
    {
        $this->attributes['phone_number'] = $phone_number;
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getTotal()
    {
        return $this->attributes['total'];
    }
    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }
    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($userId)
    {
        $this->attributes['user_id'] = $userId;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
}
