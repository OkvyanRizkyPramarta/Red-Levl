<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.image.index', ['image' => Image::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.create');
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
            
            Image::create([
                'name' => $request->name,
                'image' => $image_name,
            ]);
        }

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('New data created successfully', 'success');
        return redirect()->route('image.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('admin.image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $image = Image::findOrFail($image->id);

        if($request->file('image') == "") {

            $image->update([
                'name'=>$request->name,
            ]);

        } else {

            if ($image->image&&file_exists(storage_path('app/public/'.$image->image))) {
                \Storage::delete('public/'.$image->image);
            }

        $imagePath = $request->file('image');
        $imagePath->storeAs('public/', $imagePath->hashName());

        $image->update([
            'name'     => $request->name,
            'image'     => $imagePath->hashName()
        ]);
        }

        Alert::toast('New data created successfully', 'success');
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$image->delete();
        $img = Image::find($id);
        $img->delete();

        Alert::toast('Data deleted successfully', 'success');
        return redirect()->back();
    }
}
