<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;


class WishlistComponent extends Component
{


    public function MoveWishlistToCart($rowId)
    {
        $witem = Cart::instance('wishlist')->get($rowId);
                 Cart::instance('wishlist')->remove($rowId);
                 Cart::instance('cart')->add($witem->id, $witem->name , 1 ,$witem->price);
                 $this->emitTo('wishlist-count-component' , 'refreshComponent');
                 $this->emitTo('cart-count-component' , 'refreshComponent');



    }

    public function removeWishlist($id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem ) {

            if ($witem->id == $id) {

                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component' , 'refreshComponent');

            }
        }
    }



    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.website.site');
    }
}
