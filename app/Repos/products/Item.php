<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 21/08/2015
 * Time: 04:42
 */

namespace App\Repos\products;
use App\Product;
use App\Product_map;


class Item {

	public $item;

	public function __construct($id){
		$item = new Product_map();
		$item->product_id = $id;
		$this->item = $item;
	}


	public function createItem($size, $price,$active){

		$price = Product_map::setPrice($price);
		$this->item->price = $price;
		$this->item->size = $size;
		$this->item->active = $active;
		$this->item->active = $active;
		$this->item->save();

	}


}