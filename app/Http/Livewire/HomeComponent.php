<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Catigory;


class HomeComponent extends Component
{
    public function render()
    {
        $sliders =  HomeSlider::where('status' , 'active')->get();
        $s_prices = Product::where('sel_price' , '>' , 0 )->get();
        $l_products = Product::orderBy('created_at' , 'DESC')->get()->take(6);
        $catigories = Catigory::all();

        return view('livewire.home-component' , compact('sliders' , 's_prices' , 'l_products' , 'catigories'))->layout('layouts.website.site');
    }
}
