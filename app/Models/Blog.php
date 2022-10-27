<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon; 

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'writer',
        'image'
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }

    public static function index()
    {
        return Blog::all();
    }

    public static function store(Request $request)
    {
        Blog::create($request->all());
    }

    public static function edit(Request $request, Blog $blog)
    {
        $blog->update($request->all());
    }

    public static function orderBy()
    {
        return Blog::orderByDesc('created_at')->get();
    }
}
