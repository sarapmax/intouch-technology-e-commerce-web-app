<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use Sortable;
  
    protected $fillable = [
    	'category_id', 'name', 'price', 'shortdesc', 'longdesc', 'specfications', 'thumb_image', 'images', 'stock', 'slug'
    ];

    protected $sortable = ['name',
                           'price',
                           'created_at'];

    public function category() {
    	return $this->belongsTo(Category::class, 'category_id');
    }
}
