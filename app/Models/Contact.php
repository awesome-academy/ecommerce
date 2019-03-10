<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'id',
        'user_id',
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(App::User);
    }
}
