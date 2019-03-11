<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'id',
        'name',
        'parent_id',
    ];

    public function products()
    {
        return $this->hasMany(App::Product);
    }
}
