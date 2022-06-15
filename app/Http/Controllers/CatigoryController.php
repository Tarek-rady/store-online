<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Catigory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategoryRequest;
class CatigoryController extends Controller
{

    public function index()
    {
        $Catigories = Catigory::all();
        return view('admin.catigory.index' , compact('Catigories'));
    }


    public function create()
    {
        //
    }

    public function store(CategoryRequest $request)
    {
        Catigory::create([
            'name' => $request->name ,
            'slug' => $request->slug ,
            'user' => Auth::user()->name
        ]);

        Session()->flash('Add' , 'Catigory created successfully');
        return redirect()->route('catigories.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(CategoryRequest $request, $id)
    {
        $catigory = Catigory::where('id' , $id)->first();
        $catigory->update([
            'name' => $request->name ,
            'slug' => $request->slug ,
            'user' => Auth::user()->name

        ]);

        Session()->flash('Edit' , 'catigory Edit successfully');
        return redirect()->route('catigories.index');
    }


    public function destroy($id)
    {
        Catigory::destroy($id);
        Session()->flash('Deleted' , 'catigory delete successfully');
        return redirect()->route('catigories.index');
    }
}
