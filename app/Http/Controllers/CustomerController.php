<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Customer;
use App\Models\Industries;
use App\Models\Partner;
use App\Models\RunningText;
use App\Models\Image;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::index();
        $runningtext = RunningText::index();
        return view('user.home', compact('partner','runningtext'));
    }

    public function about()
    {
        $runningtext = RunningText::index();
        $about = Industries::index();
        return view('user.about', compact('about','runningtext'));
    }

    public function search(Request $request)
	{
        $runningtext = RunningText::index();
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$blog = DB::table('blogs')
		->where('title','like',"%".$search."%")
        ->orderBy('created_at', 'DESC')
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('user.blog', compact('blog', 'runningtext'));
 
	}

    public function blog()
    {
        $runningtext = RunningText::index();
        $blog = Blog::orderBy();
        return view('user.blog', compact('blog','runningtext'));
    }

    public function detailblog($id)
    {
        $runningtext = RunningText::index();
        $blog = Blog::findOrFail($id);
        return view('user.detailblog', compact('blog', 'runningtext'));
    }

    public function image()
    {
        $runningtext = RunningText::index();
        $image = Image::index();
        return view('user.gallery', compact('image','runningtext'));
    }

    public function internship()
    {
        $runningtext = RunningText::index();
        return view('user.internship.index', compact('runningtext'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
