<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vocational',
        'internship_date_start',
        'internship_date_finish',
        'people_total',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public static function index()
    {
        return Internship::all();
    }

    public static function store(Request $request)
    {
        Internship::create($request->all());
    }
    
}
