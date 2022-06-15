<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;
    protected $table ='orders';
    protected $guarded=[
        'user_id' ,
    	'order_id' ,
    	'status' ,
	];


    // function Get User
    public function User()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }


}
