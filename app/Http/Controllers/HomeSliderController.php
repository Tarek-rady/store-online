<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::all();
        return view('admin.sliders.index' , compact('sliders'));
    }


    public function create()
    {
        return view('admin.sliders.create');
    }


    public function store(HomeSliderRequest $request)
    {
        $file_name = '';

        if ($request->hasFile('pic')) {
            $image = $request->file('pic');
            $file_name = $image->getClientOriginalName();
        }
       $slider = HomeSlider::create([

            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'price' => $request->price,
            'link' => $request->link,
            'status' => $request->status,
            'image' => $file_name,
        ]);

        if ($request->hasFile('pic')) {
            // move pic
            $request->pic->move(public_path('assets/images/slider'), $file_name);
        }

        session()->flash('Add' , 'Home slider created successfully');
        return redirect()->route('sliders.index');
    }

    public function show(HomeSlider $homeSlider)
    {
        //
    }


    public function edit($id)
    {
        $slider = HomeSlider::where('id' , $id)->first();
        return view('admin.sliders.edit' , compact('slider'));
    }

    public function update(HomeSliderRequest $request, $id)
    {
        $new_file_name = '';
        $old_file_name = '';

        $slider = HomeSlider::findOrFail($id);
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->price = $request->price;
        $slider->link = $request->link;
        $slider->status = $request->status;


        if ($request->hasFile('pic')) {
            $new_file_name = $request->file('pic')->getClientOriginalName();
            $old_file_name = $slider->image;
            $slider->image = $new_file_name ;
        }

        if ($request->hasFile('pic')) {
            // move pic
            Storage::disk('slider')->delete($old_file_name);
            $request->pic->move(public_path('assets/images/slider'), $new_file_name);
        }
        $slider->save();

        session()->flash('Edit' , 'Home slider Edit successfully');
        return redirect()->route('sliders.index');

    }


    public function destroy($id)
    {

        $slider = HomeSlider::where('id' , $id)->first();
        $slider->id = $id;

        $old_file_name = $slider->image;

        if (!empty($slider->title)) {

            Storage::disk('slider')->delete($old_file_name);
        }

        HomeSlider::destroy($id);

        session()->flash('Deleted' , 'Home slider Deleted successfully');
        return redirect()->route('sliders.index');
    }
}
