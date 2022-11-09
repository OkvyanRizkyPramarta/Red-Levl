<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'address',
        'phone_number',
        'vocational',
        'internship_date',
        'people_total',
        'role'
    ];

    public static function index()
    {
        return Internship::all();
    }

    public static function store(Request $request)
    {
        Internship::create($request->all());
    }
}
