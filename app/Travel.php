<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    // use SoftDeletes;

    protected $table = 'travel';

    protected $fillable = ['id', 'title', 'location', 'slug','about', 'featured_event', 'language', 'foods', 'date', 'duration', 'price'];

}
