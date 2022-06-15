<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Cart;
use PhpParser\Node\Expr\Cast\Double;

class CheckoutComponent extends Component
{

   public $FirstName;
   public $LastName;
   public $mopile;
   public $email;
   public $line1;
   public $line2;
   public $city;
   public $province;
   public $country;
   public $zipcode;
   public $paymentmethod;
   public $Thankyou;



            public function updated($faildest)
            {
                $this->validateOnly($faildest , [
                    'FirstName'=> 'required' ,
                    'LastName'=> 'required' ,
                    'mopile'=> 'required|numeric' ,
                    'email'=> 'required|email' ,
                    'line1'=> 'required' ,
                    'line2'=> 'required' ,
                    'city'=> 'required' ,
                    'province'=> 'required' ,
                    'country'=> 'required' ,
                    'zipcode'=> 'required' ,
                    'paymentmethod' => 'required'
                ]);
            }

            public function PlaceOrder()
            {

                $this->validate([
                    'FirstName'=> 'required' ,
                    'LastName'=> 'required' ,
                    'mopile'=> 'required|numeric' ,
                    'email'=> 'required|email' ,
                    'line1'=> 'required' ,
                    'line2'=> 'required' ,
                    'city'=> 'required' ,
                    'province'=> 'required' ,
                    'country'=> 'required' ,
                    'zipcode'=> 'required' ,

                ]);

                $order = new Order();
                $order->user_id     = Auth::user()->id;
                $order->subtotal    = str_replace(',','',session()->get('checkout')['subtotal']);
                $order->discount    = 0;
                $order->tax         = str_replace(',','',session()->get('checkout')['tax']);
                $order->total       = str_replace(',','',session()->get('checkout')['total']);
                $order->FirstName   = $this->FirstName;
                $order->LastName    = $this->LastName;
                $order->mopile      = $this->mopile;
                $order->email       = $this->email;
                $order->line1       = $this->line1;
                $order->line2       = $this->line2;
                $order->city        = $this->city;
                $order->province    = $this->province;
                $order->country     = $this->country;
                $order->zipcode     = $this->zipcode;
                $order->status      = 'orderd';
                $order->save();

                foreach ( Cart::instance('cart')->content() as $item ) {
                    $orderItem = new OrderItem();
                    $orderItem->product_id =$item->id ;
                    $orderItem->order_id =$order->id ;
                    $orderItem->price =$item->price ;
                    $orderItem->quantity = $item->qty ;
                    $orderItem->save();
                }

                $Transaction = new Transaction();
                $Transaction->user_id = Auth::user()->id;
                $Transaction->order_id = $order->id;
                $Transaction->mode = 'cod';
                $Transaction->status = 'pending';
                $Transaction->save();
                Cart::instance('cart')->destroy();
                session()->forget('checkout');
                return redirect()->route('thankyou.show');



            }

            public function verifyForCheckout()
            {

                if (!Auth::check()) {
                    return redirect()->route('login');
                }else if($this->Thankyou) {
                    return redirect()->route('thankyou.show');
                }else if (!session()->get('checkout')) {
                    return redirect()->route('cart.products');
                }
            }

            public function render()
            {
                return view('livewire.checkout-component')->layout('layouts.website.site');
            }
}
