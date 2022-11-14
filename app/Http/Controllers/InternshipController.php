<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\IsValidPassword;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $internship = Auth::user()->internship()->paginate(1500);
        // return view('user.internship.dashboard', ['internship' => $internship]);
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('user.internship.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255|regex:/^([^0-9]*)$/',
        //     'username' => 'required|min:4|alpha_dash',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => ['required', 'string', new isValidPassword()],
        //     'address' => 'required',
        //     'phone_number' => 'required|string|alpha_num|min:10|max:14|regex:/^([^a-zA-Z]*)$/|regex:/(0)[0-9]{9}/',
        //     'vocational' => 'required|string',
        //     'internship_date' => 'required',
        //     'people_total' => 'required',
        //     'role' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     Alert::toast($validator->messages()->all()[0], 'error');
        //     return redirect()->back()->withInput();
        // }

        //dd($request);


        // User::create([
        //     'name' => $request['name'],
        //     'username' => $request['username'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        //     'address' => $request['address'],
        //     'phone_number' => $request['phone_number'],
        //     'role' => $request['role'],
        // ]);

        
        // dd($request);
    }
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'user_id' => 'required',
        //     'vocational' => 'required',
        //     'internship_date_start' => 'required',
        //     'internship_date_finish' => 'required',
        //     'people_total' => 'required',
        //     'role' => 'required',
        // ]);

        // Internship::create([
        //     'user_id' => Auth::user()->id,
        //     'vocational' => $request->vocational,
        //     'internship_date_start' => $request->internship_date_start,
        //     'internship_date_finish' => $request->internship_date_finish,
        //     'people_total' => $request->people_total,
        //     'role' => $request->role,
        // ]);

        // if ($validator->fails()) {
        //     Alert::toast($validator->messages()->all()[0], 'error');
        //     return redirect()->back()->withInput();
        // }

        // Alert::toast('Information saved successfully', 'success');
        // return redirect()->route('user.internship.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
