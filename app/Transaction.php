<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // use Softdeletes;

    protected $table = 'transaction';

    protected $fillable = ['id', 'travel_id', 'users_id', 'additional_visa', 'transaction_total', 'transaction_status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function travel()
    {
       return $this->belongsTo(Travel::class, 'travel_id', 'id');
    }

}
