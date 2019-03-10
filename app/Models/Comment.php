<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = [
        'id',
        'name',
        'phone',
        'content',
        'rating',
        'product_id',
        'user_id',
    ];

    public function product()
    {
        return $this->belongsTo(App::Product);
    }
    public function user()
    {
        return $this->belongsTo(App::User);
    }
}
