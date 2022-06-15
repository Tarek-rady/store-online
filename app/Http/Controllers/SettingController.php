<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeetingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        $Setting = Setting::find(1);
        return view('admin.setting.create' , compact('Setting'));
    }


    public function store(SeetingRequest $request)
    {
        Setting::create([
            'email'  => $request->email ,
            'phone'  => $request->phone ,
            'phone2'  => $request->phone2 ,
            'addres'  => $request->addres ,
            'map'  => $request->map ,
            'twiter'  => $request->twiter ,
            'facebook'  => $request->facebook ,
            'pinterest'  => $request->pinterest ,
            'instagram'  => $request->instagram ,
            'youtube'  => $request->youtube ,

        ]);



    }


    public function show(Setting $setting)
    {

    }


    public function edit(Setting $setting)
    {


    }


    public function update(Request $request, Setting $setting)
    {
        //
    }


    public function destroy(Setting $setting)
    {
        //
    }
}
