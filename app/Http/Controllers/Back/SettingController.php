<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::firstOrFail();

        return view('back.settings.index', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'app_name' => 'required',
            'app_description' => 'required',
            'admin_email' => 'nullable|email',
            'company_email' => 'nullable|email',
            'company_address' => 'nullable|string',
            'company_phone' => 'nullable|string',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]); 
        
        $setting->update($request->all());

        return back()->with(['message' => 'Setting has been updated successfully.']);
    }
}
