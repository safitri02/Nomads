<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $table = 'galleries';

    protected $fillable = ['id', 'travel_id', 'image'];

    public function travel()
    {
        return $this->belongsTo(Travel::class, 'id', 'id');
    }
}
