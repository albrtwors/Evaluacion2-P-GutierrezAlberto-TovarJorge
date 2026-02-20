<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'album_name',
        'release_year',
        'discographic',
        'genre_id'
    ];
    public function genre(){
        return $this->belongsTo('genres');
    }
}
