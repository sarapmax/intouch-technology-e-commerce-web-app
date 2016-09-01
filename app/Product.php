<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'category_id', 'name', 'price', 'shortdesc', 'longdesc', 'specfications', 'thumb_image', 'images', 'stock', 'live'
    ];

    public function category() {
    	return $this->belongTo(Category::class, 'category_id');
    }
}
