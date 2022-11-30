<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RunningText extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public static function index()
    {
        return RunningText::all();
    }

    public static function getData() 
    {
        return RunningText::first();
    }

    public static function countData() 
    {
        return RunningText::count();
    }

    public static function store(Request $request)
    {
        RunningText::create($request->all());
    }

    public static function edit(Request $request, RunningText $runningtext)
    {
        $runningtext->update($request->all());
    }
}
