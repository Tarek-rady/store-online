<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;

class Transaction extends Model
{
    use HasFactory;
    protected $table ='transactions';
    protected $fillable=[];











    // function get user
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }


    // function get orders
    public function orders()
    {
        return $this->belongsTo(Order::class , 'order_id');
    }
}
