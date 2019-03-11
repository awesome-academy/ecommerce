<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Suggest extends Model
{
    protected $table = 'suggest';

    protected $fillable = [
        'id',
        'content',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(App::User);
    }
}
