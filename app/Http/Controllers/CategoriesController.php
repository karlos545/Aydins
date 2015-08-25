<?php namespace App\Http\Controllers;
use App\Http\Requests\Category;
use App\Product;
use Storage;
use Illuminate\Http\Request;
use App\Categories;
use Illuminate\Support\Facades\Redirect;

/**
 * Class CategoriesController
 * @package App\Http\Controllers
 */
class CategoriesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Redirect::route('categories.create');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $categories = Categories::paginate('10');
    return view('categories.index')->with('categories', $categories);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Category $request)
  {

    $category = Categories::create($request->input());// create the category


    flash()->success($request->input('name'),'category has been created.');//flash a success message to the user

    $directory = "/img/products/".$category->id;
    Storage::makeDirectory($directory);// create a directory with the category id

    return Redirect::route('categories.create');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $category = Categories::find($id);
    return view('categories.show');
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
  public function update(Request $request, $id)
  {
    $category = Categories::findOrFail($id);
    $category->name = $request->name;
    $category->save();

    return Redirect::route('categories.create');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Categories::destroy($id);
    return Redirect()->back();
  }
  
}

?>