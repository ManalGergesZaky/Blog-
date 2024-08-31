<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'user_id'
    ];

    //function for make relation of forign key
    //m3aya el id bta3 el user w mahtagah el name
    //badel m ana 3amlah el fun. nafs asme el tabel ...momken maktabsh el forigen key w ho hizaoid _id 3la asm el fun.

    public function user(){

        return $this->belongsTo(user::class , 'user_id') ;
    }
}
