<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\User;
use App\Models\Member;
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
    public function industryIndex()
    {
        $internship = Auth::user()->internship()->paginate(1500);
        return view('user.internship.industry.dashboard', ['internship' => $internship]);
    }  

    public function industryMember()
    {
        return view('user.internship.industry.member');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function industryCreate()
    {
        return view('user.internship.industry.inputdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function industryStore(Request $request)
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
        
        // Internship::create([
        //     'user_id' => Auth::user()->id,
        //     'vocational' => $request->vocational,
        //     'internship_date_start' => $request->internship_date_start,
        //     'internship_date_finish' => $request->internship_date_finish,
        //     'people_total' => $request->people_total,
        // ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Information saved successfully', 'success');
        return redirect('/internship/industry/dashboard');
    }

    public function industryShow()
    {
        $member = Member::whereUserId(Auth::id())->get();
        return view('user.internship.industry.detail', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function memberStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'owner' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $member = Member::where('user_id', Auth::user()->id)->take(1)->get();
        
        if (count($member) > 0 ){
            Alert::toast('New data created Failed', 'danger');
            return redirect('/internship/industry/member');
        } else {
            if ($request->file('image')) {
                $image_name = $request->file('image')->store('payments', 'public');
                
                $member = Member::create([
                    'user_id' => Auth::user()->id,
                    'owner' => $request->owner,
                    'email' => $request->email,
                    'status' => 'VIP Member',
                    'image' => $image_name,
                ]);
            }

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('New data created successfully', 'success');
        return redirect('/internship/industry/dashboard');
        }

            
    }

    public function adminInternshipIndex()
    {
        return view('admin.internship.index', ['internship' => Internship::index()]);
    }

    public function adminInternshipEdit(Internship $internship)
    {
        return view('admin.internship.edit', compact('internship'));
    }

    public function adminInternshipUpdate(Request $request, Internship $internship)
    {
        $validator = Validator::make($request->all(), [
            'vocational' => 'required',
            'internship_date_start' => 'required',
            'internship_date_finish' => 'required',
            'people_total' => 'required',
        ]);

        $internship = Internship::findOrFail($internship->id);

        $internship->update([
            'vocational' => $request->vocational,
            'internship_date_start' => $request->internship_date_start,
            'internship_date_finish' => $request->internship_date_finish,
            'people_total' => $request->people_total
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Data Edited successfully', 'success');
        return redirect('/admin/internship');
    }

    public function adminInternshipDestroy(Internship $internship)
    {
        $internship->delete();

        Alert::toast('Data deleted successfully', 'success');
        return redirect()->back();
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
