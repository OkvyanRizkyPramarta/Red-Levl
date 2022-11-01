<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index', ['blog' => Blog::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'title' => 'required',
            'description' => 'required',
            'writer' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
       
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
            
            Blog::create([
                'title' => $request->title,
                'content' => $request->content,
                'description' => $request->description,
                'writer' => $request->writer,
                'image' => $image_name,
            ]);
        }

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('New data created successfully', 'success');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'writer' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $blog = Blog::findOrFail($blog->id);

        if($request->file('image') == "") {

            $blog->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'writer'=>$request->writer,
            ]);

        } else {

            if ($blog->image&&file_exists(storage_path('app/public/'.$blog->image))) {
                \Storage::delete('public/'.$blog->image);
            }

        $image = $request->file('image');
        $image->storeAs('public/', $image->hashName());

        $blog->update([
            'title'     => $request->title,
            'description'=>$request->description,
            'writer'    => $request->writer,
            'image'     => $image->hashName()
        ]);
    }

        Alert::toast('New data created successfully', 'success');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        Alert::toast('Data deleted successfully', 'success');
        return redirect()->back();
    }
}
