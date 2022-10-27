<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Industries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'description',
        'address',
        'phone_number',
        'whatsapp_number',
        'email',
    ];

    public static function index()
    {
        return Industries::all();
    }

    public static function getData() 
    {
        return Industries::first();
    }

    public static function countData() 
    {
        return Industries::count();
    }

    public static function store(Request $request)
    {
        Industries::create($request->all());
    }

    public static function edit(Request $request, Industries $industry)
    {
        $industry->update($request->all());
    }
}
