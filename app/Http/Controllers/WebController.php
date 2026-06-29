<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    $foods = [

        [
            'name' => 'Burger',
            'image' => 'burger.jpg',
            'model' => 'burger2.glb',
            'route' => 'burger.3d',
        ],

        [
            'name' => 'Tikka',
            'image' => 'tickaa.png',
            'model' => 'tikka 3d model2.glb',
            'route' => 'tikka.3d',
        ],

        [
            'name' => 'Boti Roll',
            'image' => 'boti roll image.jpg',
            'model' => 'boti roll.glb',
            'route' => 'boti_roll.3d',
        ],

    ];

    return view('user.foods', compact('foods'));
}
}
