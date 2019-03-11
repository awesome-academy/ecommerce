<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'id',
        'name',
        'price',
        'image_link',
        'image_list',
        'view',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(App::Category);
    }

    public function comments()
    {
        return $this->hasMany(App::Comment);
    }
    public function orders()
    {
        return $this->hasMany(App::Order);
    }
}
