<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Transaction;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'id',
        'quatity',
        'amount',
        'product_id',
        'transaction_id',
    ];

    public function transactions()
    {
        return $this->hasMany(App::Transaction);
    }
    public function products()
    {
        return $this->belongsMany(App::Product);
    }
}
