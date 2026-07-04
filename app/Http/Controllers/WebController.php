<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;


class WebController extends Controller
{
    public function index()
    {
    return view('user.index');

    }


    public function burger()
    {
    return view('user.burger');

    }

    public function tikka()
    {
    return view('user.tikka');

    }
    // public function fried_chicken()
    // {
    // return view('user.fried_chicken');

    // }
    public function boti_roll()
    {
    return view('user.boti_roll');

    }

    public function foods()
{
    $foods = Food::where('status',1)->latest()->get();

    return view('user.foods', compact('foods'));
}


public function showFood(Food $food)
{
    $recommended = Food::where('id', '!=', $food->id)
        ->where('status', 1)
        ->take(4)
        ->get();

    return view('user.food_detail', compact('food', 'recommended'));
}
}
