<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;


class DetailsComponent extends Component
{
    public $slug ;
    public $qty;



    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1 ;
    }


    public function store($id , $name , $price)
    {
        Cart::instance('cart')->add($id , $name , $this->qty , $price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component' , 'refreshComponent');
        Session()->flash('massage' , 'item created in cart Sucessfully');
        // return redirect()->route('cart.products');
    }

    public function reduceQty()
    {
         if ($this->qty > 1) {

            $this->qty--;
         }
    }

    public function increaseQty()
    {
        $this->qty++;
    }



    public function render()
    {
        $Product = Product::Where('slug' , $this->slug)->first();
        $po_products = Product::inRandomOrder()->limit(4)->get();
        $Re_products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.details-component' , compact('Product' , 'po_products' , 'Re_products'))->layout('layouts.website.site');
    }
}
