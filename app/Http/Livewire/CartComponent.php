<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Cart;


class CartComponent extends Component
{

    public function removeitem($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component' , 'refreshComponent');
        session()->flash('massage' , 'item deleted sucessfuly');

    }

    public function deleteAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component' , 'refreshComponent');
        session()->flash('massage' , 'Deleted All sucessfuly');

    }

    public function increaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1 ;
        Cart::instance('cart')->update($rowId , $qty);
        $this->emitTo('cart-count-component' , 'refreshComponent');


    }

    public function reduceQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId , $qty);
        $this->emitTo('cart-count-component' , 'refreshComponent');

    }

    public function checkout()
    {
        if (Auth::check()) {

            return redirect()->route('checkout');
        }

        else{
            return redirect()->route('register');
        }
    }

    public function setamountforcheckout()
    {
        if (!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        }
        session()->put('checkout' , [
            'discount' => '0' ,
            'subtotal' => Cart::instance('cart')->subtotal,
            'tax' => Cart::instance('cart')->tax,
            'total' => Cart::instance('cart')->total,
        ]);
    }

    public function render()
    {
        $this->setamountforcheckout();
        return view('livewire.cart-component')->layout('layouts.website.site');
    }
}
