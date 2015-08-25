<?php namespace App\Http\Controllers;

use App\Product_map;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;

class ProductsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
    $category = Categories::findOrFail($request->cat_id);
    $products = Categories::products($request->cat_id);

    return view('products.create')
        ->with('category', $category)
        ->with('products', $products);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $product = new Product();
    $product = $product->create($request->input());
    $directory = 'img/products';
    $request->file('img')->move($directory."/".$product->category_id, $product->id."jpg");

    return view();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
     $product = Product::findOrFail($id);
     $items = Product_map::where('product_id', $id)->get();
    return view('products.variations.create',compact('product','items'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>