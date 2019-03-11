<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Payment extends Model
{
    protected $table = 'payment';

    protected $fillable = [
        'id',
        'name',
    ];

    public function transactions()
    {
        return $this->hasMany(App::Transaction);
    }
}
