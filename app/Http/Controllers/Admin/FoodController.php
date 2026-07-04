<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{

    public function index()
    {

        $food = Food::latest()->get();

        return view('admin.food.index', compact('food'));

    }

    public function create()
{
    $food = Food::where('status',1)->get();

    return view('admin.food.create',compact('food'));
}

    public function store(Request $request)
{

    $request->validate([

        'name' => 'required',

        'description' => 'required',

        'price' => 'required',

        'ingredients' => 'required',

        'status' => 'required',

        'image' => 'required|image',

        'model' => 'required|mimes:glb',

    ]);



    $food = new Food();

    $food->name = $request->name;

    $food->description = $request->description;

    $food->price = $request->price;

    $food->ingredients = $request->ingredients;

    $food->recommended_food_id = $request->recommended_food_id;

    $food->status = $request->status;



    if($request->hasFile('image')){

        $image = $request->file('image');

        $imageName = time().'_'.$image->getClientOriginalName();

        $image->move(public_path('food/images'),$imageName);

        $food->image = $imageName;

    }



    if($request->hasFile('model')){

        $model = $request->file('model');

        $modelName = time().'_'.$model->getClientOriginalName();

        $model->move(public_path('food/models'),$modelName);

        $food->model = $modelName;

    }



    $food->save();



    return redirect()->route('food.index')

    ->with('success','Food Added Successfully.');

    }

    public function show(Food $food){}

    public function edit(Food $food){
        $foods = Food::where('status',1)->get();
        return view('admin.food.edit', compact('food','foods'));
    }

    public function update(Request $request, Food $food)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'ingredients' => 'required',
        'status' => 'required',
    ]);

    $food->name = $request->name;
    $food->description = $request->description;
    $food->price = $request->price;
    $food->ingredients = $request->ingredients;
    $food->recommended_food_id = $request->recommended_food_id;
    $food->status = $request->status;

    // Update Image
    if($request->hasFile('image')){

        if($food->image && file_exists(public_path('food/images/'.$food->image))){
            unlink(public_path('food/images/'.$food->image));
        }

        $image = $request->file('image');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('food/images'), $imageName);

        $food->image = $imageName;
    }

    // Update 3D Model
    if($request->hasFile('model')){

        if($food->model && file_exists(public_path('food/models/'.$food->model))){
            unlink(public_path('food/models/'.$food->model));
        }

        $model = $request->file('model');
        $modelName = time().'_'.$model->getClientOriginalName();
        $model->move(public_path('food/models'), $modelName);

        $food->model = $modelName;
    }

    $food->save();

    return redirect()->route('food.index')
            ->with('success','Food Updated Successfully.');
}

    public function destroy(Food $food)
{

    // Delete Image
    if($food->image && file_exists(public_path('food/images/'.$food->image))){

        unlink(public_path('food/images/'.$food->image));

    }

    // Delete 3D Model
    if($food->model && file_exists(public_path('food/models/'.$food->model))){

        unlink(public_path('food/models/'.$food->model));

    }

    $food->delete();

    return redirect()->route('food.index')
            ->with('success','Food Deleted Successfully.');

}

}