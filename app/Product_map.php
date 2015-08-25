<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_map extends Model {

	protected $table = 'product_map';
	protected $fillable = ["price", "size", "active","product_id"];
	public $timestamps = true;

	
	public function product(){
	    $this->belongsTo(\App\Product::class, 'product_id');
	}

	public static function setPrice($price){
		return $price*100;
	}

	public static function getPrice($price){
		return $price/100;
	}

}