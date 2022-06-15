<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table='order_items';

    protected $fillable=[
        'product_id',
    	'order_id',
    	'price',
    	'quantity'
    ];










    // function Get Order
    public function orders()
    {
         return $this->belongsTo(Order::class , 'order_id');
    }

    // function Get products
    public function products()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
