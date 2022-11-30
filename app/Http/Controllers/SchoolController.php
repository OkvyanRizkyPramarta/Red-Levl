<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\User;
use App\Models\RunningText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\IsValidPassword;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolIndex()
    {
        $runningtext = RunningText::index();
        $internship = Auth::user()->internship()->paginate(1500);
        return view('user.internship.school.dashboard', compact('internship', 'runningtext'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolCreate()
    {
        $runningtext = RunningText::index();
        return view('user.internship.school.inputdata', compact('runningtext'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function schoolStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'vocational' => 'required',
            'internship_date_start' => 'required',
            'internship_date_finish' => 'required',
            'people_total' => 'required',
        ]);

        $file           = $request->file('file');
        $file_name      = $file->getClientOriginalName();
        $file->move('file_upload',$file->getClientOriginalName());

        $internship = new Internship;
        $internship->user_id = Auth::user()->id;
        $internship->vocational = $request->input('vocational');
        $internship->internship_date_start = $request->input('internship_date_start');
        $internship->internship_date_finish = $request->input('internship_date_finish');
        $internship->people_total = $request->input('people_total');
        $internship->file = $file_name;

        $internship->save();

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Information saved successfully', 'success');
        return redirect('/internship/school/dashboard');
    }

    public function schoolShow()
    {
        $runningtext = RunningText::index();
        return view('user.internship.school.detail', compact('runningtext'));
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
