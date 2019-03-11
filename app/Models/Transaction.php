<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Models\User;
use App\Models\Order;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'amount',
        'message',
        'status',
        'user_id',
        'payment_id',
    ];

    public function payment()
    {
        return $this->belongsTo(App::Payment);
    }
    public function order()
    {
        return $this->belongsTo(App::Order);
    }
    public function user()
    {
        return $this->belongsTo(App::User);
    }
}
