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

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UniversityIndex()
    {
        $internship = Auth::user()->internship()->paginate(1500);
        return view('user.internship.university.dashboard', ['internship' => $internship]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UniversityCreate()
    {
        return view('user.internship.university.inputdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function UniversityStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'vocational' => 'required',
            'internship_date_start' => 'required',
            'internship_date_finish' => 'required',
            'people_total' => 'required',
        ]);

        Internship::create([
            'user_id' => Auth::user()->id,
            'vocational' => $request->vocational,
            'internship_date_start' => $request->internship_date_start,
            'internship_date_finish' => $request->internship_date_finish,
            'people_total' => $request->people_total,
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Information saved successfully', 'success');
        return redirect('/internship/university/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
