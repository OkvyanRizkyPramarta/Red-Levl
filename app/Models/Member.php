<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'owner',
        'email',
        'status',
        'image'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
    public static function index()
    {
        return Member::all();
    }

    public static function store(Request $request)
    {
        Member::create($request->all());
    }

    public static function edit(Request $request, Member $member)
    {
        $member->update($request->all());
    }

    public static function countData() 
    {
        return Member::count();
    }
}
