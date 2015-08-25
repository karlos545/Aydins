<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	protected $fillable = ['name', 'category_id', 'desc'];
	public $timestamps = true;

	public function product_map(){
	    return $this->hasMany(\App\Product_map::class);
	}

}