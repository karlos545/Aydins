<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_map;
use App\Repos\products\Item;

class Product_mapController extends Controller {

  public function __construct(){
      
  }
  
  public function store(Request $request) {
    $size = $request->input('size');
    $price = $request->input('price');
    $active = $request->input('active');

    $item = new Item($request->input('product_id'));
    $item->createItem($size,$price, $active);

    return "success";

  }

  public function edit($id) {

  }

}
?>