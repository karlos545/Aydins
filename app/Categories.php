<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Product_map;

class Categories extends Model {

	protected $table = 'categories';
	public $timestamps = true;
	protected $fillable = ['name'];

	public static function products($id){
	    $category = Categories::find($id);
		$products = Product::all()->where('category_id', $category->id);
		return $products;
	}

}