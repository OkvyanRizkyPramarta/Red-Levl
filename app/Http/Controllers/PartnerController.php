<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partner.index', ['partner' => Partner::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
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
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
       
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
            
            Partner::create([
                'name' => $request->name,
                'image' => $image_name,
            ]);
        }

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('New data created successfully', 'success');
        return redirect()->route('partner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.partner.detail', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $partner = Partner::findOrFail($partner->id);

        if($request->file('image') == "") {

            $partner->update([
                'name'=>$request->name
            ]);

        } else {

            if ($partner->image&&file_exists(storage_path('app/public/'.$partner->image))) {
                \Storage::delete('public/'.$partner->image);
            }

        $image = $request->file('image');
        $image->storeAs('public/', $image->hashName());

        $partner->update([
            'name'     => $request->name,
            'image'     => $image->hashName()
        ]);
    }

        Alert::toast('New data created successfully', 'success');
        return redirect()->route('partner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
