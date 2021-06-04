<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','títle', 'artist_group', 'release_date', 'track', 'cover',
    ];


    //Relación uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
