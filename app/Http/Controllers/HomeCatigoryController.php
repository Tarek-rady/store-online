<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catigory;

class HomeCatigoryController extends Controller
{

    public function index()
    {
        $catigories = Catigory::all();
        return view('admin.home-catigories.create' , compact('catigories'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
