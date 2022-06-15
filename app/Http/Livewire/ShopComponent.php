<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Catigory;
use Cart;

class ShopComponent extends Component
{

    public $Sorting;
    public $PageSize;
    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->Sorting='defult';
        $this->PageSize=12 ;
        $this->min_price = 1000 ;
        $this->max_price = 10000 ;
    }

    public function store($id , $name , $price)
    {
        Cart::instance('cart')->add($id , $name , 1 , $price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component' , 'refreshComponent');
        Session()->flash('massage' , 'item Created suessfully in cart');
        // return redirect()->route('cart.products');
    }

    public function AddWishlist($id , $name , $price)
    {
        Cart::instance('wishlist')->add($id , $name , 1 , $price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component' , 'refreshComponent');

    }

    public function removeWihlist($id)
    {
         foreach (Cart::instance('wishlist')->content() as $witem) {

            if ($witem->id == $id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component' , 'refreshComponent');



            }
         }
    }



    public function render()
    {

        if ($this->Sorting== 'date') {
            $Products = Product::whereBetween('price' , [$this->min_price , $this->max_price])->orderBy('created_at' , 'DESC')->paginate($this->PageSize);
        }elseif ($this->Sorting== 'price') {
            $Products = Product::whereBetween('price' , [$this->min_price , $this->max_price])->orderBy('price' , 'ASC')->paginate($this->PageSize);
        }elseif ($this->Sorting== 'price-desc') {
            $Products = Product::whereBetween('price' , [$this->min_price , $this->max_price])->orderBy('price' , 'DESC')->paginate($this->PageSize);
        }else{
            $Products = Product::whereBetween('price' , [$this->min_price , $this->max_price])->paginate(9);
        }


        $catigories = Catigory::all();
        $po_products = Product::inRandomOrder()->limit(4);
        return view('livewire.shop-component' , compact('Products' , 'po_products' , 'catigories'))->layout('layouts.website.site');
    }
}
