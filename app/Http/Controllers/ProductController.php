<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Catigory;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Auth\Events\Validated;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('created_at' , 'desc')->get();
        return view('admin.product.index' , compact('products'));
    }


    public function create()
    {
       $Catigories= Catigory::all();
       return view('admin.product.create' , compact('Catigories'));
    }


    public function store(ProductRequest $request)
    {
        $file_name = '';
        if ($request->hasFile('pic')) {
            $image = $request->file('pic');
            $file_name = $image->getClientOriginalName();
        }

       $product = Product::create([

            'name' => $request->name ,
            'slug' => $request->slug ,
            'short_description' => $request->short_description ,
            'description' => $request->description ,
            'price' => $request->price ,
            'sel_price' => $request->sel_price,
            'SKU' => $request->SKU ,
            'stock_status' => $request->stock_status ,
            'quantity' => $request->quantity ,
            'image' => $file_name ,
            'images' => $request->images ,
            'catigori_id' => $request->catigorie_id

        ]);
        if ($request->hasFile('pic')) {
            // move pic
            $request->pic->move(public_path('Attachments/products/'), $file_name);
        }
          Session()->flash('Add' , 'Add product succsess');
          return redirect()->route('products.index');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Product = Product::where('id' , $id)->first();
        $catigories = Catigory::all();
        return view('admin.product.edit' , compact('Product' , 'catigories'));
    }


    public function update(ProductRequest $request, $id)
    {

        $new_file_name = '';
        $old_file_name = '';

        $Product = Product::findOrFail($id);
            $Product->name = $request->name ;
            $Product->slug = $request->slug ;
            $Product->short_description = $request->short_description ;
            $Product->description = $request->description ;
            $Product->price = $request->price ;
            $Product->sel_price = $request->sel_price ;
            $Product->SKU = $request->SKU ;
            $Product->stock_status = $request->stock_status ;
            $Product->quantity = $request->quantity ;
            $Product->images = $request->images ;
            $Product->catigori_id = $request->catigories ;




        if ($request->hasFile('pic')) {
            $new_file_name = $request->file('pic')->getClientOriginalName();
            $old_file_name = $Product->image;
            $Product->image = $new_file_name ;
        }

        if ($request->hasFile('pic')) {
            // move pic
            Storage::disk('products')->delete($Product->id.'/'.$old_file_name);
            $request->pic->move(public_path('Attachments/products/' ), $new_file_name);
        }

        $Product->save();
        Session()->flash('Edit' , 'Product Edit Successfully');
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $old_file_name = '';

        $Product = Product::where('id' , $id)->first();
        $Product->id = $id;

        $old_file_name = $Product->image;

        if (!empty($Product->name)) {

            Storage::disk('products')->delete($old_file_name);
        }
        Product::destroy($id);
        session()->flash('Deleted' , 'product deleted successfully');
        return redirect()->route('products.index');
    }
}
