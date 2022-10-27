<?php

namespace App\Http\Controllers;

use App\Models\Industries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Industries::countData() == 0) {
            $industry = Industries::all();
            return view('admin.redlevl.index', compact('industry'));
        } else {
            $industry = Industries::getData();
            return view('admin.redlevl.edit', compact('industry'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'owner' => 'required|max:255|regex:/^([^0-9]*)$/',
            'email' => 'required|max:255|email',
            'address' => 'required|regex:/([- ,\/0-9a-zA-Z]+)/',
            'phone_number' => 'required|string|alpha_num|min:10|max:14|regex:/^([^a-zA-Z]*)$/|regex:/(0)[0-9]{9}/',
            'whatsapp_number' => 'required|string|alpha_num|min:10|max:14|regex:/^([^a-zA-Z]*)$/|regex:/(0)[0-9]{9}/',
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Industries::store($request);
        Alert::toast('Information saved successfully', 'success');
        return redirect()->route('industry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industries $industry)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'owner' => 'required|max:255',
            'email' => 'required|max:255|email',
            'address' => 'required',
            'phone_number' => 'max:15|regex:/^[0-9]+$/',
            'whatsapp_number' => 'max:15|regex:/^[0-9]+$/',
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Industries::edit($request, $industry);
        Alert::toast('Information saved successfully', 'success');
        return redirect()->route('industry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
        //
    }
}
