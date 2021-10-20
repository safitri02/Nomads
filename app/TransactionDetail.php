<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    // use Softdeletes;

    protected $table = 'transaction';

    protected $fillable = ['id', 'transaction_id', 'username', 'nationality', 'is_visa', 'doe_passport'];


    public function transaction()
    {
       return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

}
