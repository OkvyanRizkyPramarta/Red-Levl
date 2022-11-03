<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image'
    ];

    public static function index()
    {
        return Image::all();
    }

    public static function store(Request $request)
    {
        Image::create($request->all());
    }

    public static function edit(Request $request, Image $image)
    {
        $image->update($request->all());
    }
}
