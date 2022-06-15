<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Catigory;
use Cart;


class CatigoryComponent extends Component
{

    public $Sorting;
    public $PageSize;
    public $slug;

    public function mount($slug)
    {
        $this->Sorting='defult';
        $this->PageSize=12 ;
        $this->slug=$slug;

    }

    public function store($id , $name , $price)
    {
        Cart::instance('cart')->add($id , $name , 1 , $price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component' , 'refreshComponent');
        $this->emitTo('cart-count-component' , 'refreshComponent');
        Session()->flash('massage' , 'item Created suessfully in cart');
        // return redirect()->route('cart.products');
    }


    public function render()
    {

        $Catigory = Catigory::where('slug' , $this->slug)->first();
        $Catigory_id = $Catigory->id ;
        $Catigory_name = $Catigory->name;



        if ($this->Sorting== 'date') {
            $Products = Product::where('catigori_id' , $Catigory_id)->orderBy('created_at' , 'DESC')->paginate($this->PageSize);
        }elseif ($this->Sorting== 'price') {
            $Products = Product::where('catigori_id' , $Catigory_id)->orderBy('price' , 'ASC')->paginate($this->PageSize);
        }elseif ($this->Sorting== 'price-desc') {
            $Products = Product::where('catigori_id' , $Catigory_id)->orderBy('price' , 'DESC')->paginate($this->PageSize);
        }else{
            $Products = Product::where('catigori_id' , $Catigory_id)->paginate(9);
        }


        $catigories = Catigory::all();
        $po_products = Product::inRandomOrder()->limit(4);

        return view('livewire.catigory-component' , compact('Products' , 'catigories' , 'po_products' , 'Catigory_name'))->layout('layouts.website.site');
    }
}
