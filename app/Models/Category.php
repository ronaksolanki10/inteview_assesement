<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];
    protected $timestap = true;

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
