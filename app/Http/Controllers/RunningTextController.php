<?php

namespace App\Http\Controllers;

use App\Models\RunningText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class RunningTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (RunningText::countData() == 0) {
            $runningtext = RunningText::all();
            return view('admin.runningtext.index', compact('runningtext'));
        } else {
            $runningtext = RunningText::getData();
            return view('admin.runningtext.edit', compact('runningtext'));
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
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        RunningText::store($request);
        Alert::toast('Information saved successfully', 'success');
        return redirect()->route('runningtext.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RunningText  $runningText
     * @return \Illuminate\Http\Response
     */
    public function show(RunningText $runningText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunningText  $runningText
     * @return \Illuminate\Http\Response
     */
    public function edit(RunningText $runningText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunningText  $runningText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunningText $runningtext)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        RunningText::edit($request, $runningtext);
        Alert::toast('Information saved successfully', 'success');
        return redirect()->route('runningtext.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunningText  $runningText
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunningText $runningText)
    {
        //
    }
}
