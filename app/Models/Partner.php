<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image'
    ];

    public static function index()
    {
        return Partner::all();
    }

    public static function store(Request $request)
    {
        Partner::create($request->all());
    }

    public static function edit(Request $request, Partner $partner)
    {
        $partner->update($request->all());
    }
}
