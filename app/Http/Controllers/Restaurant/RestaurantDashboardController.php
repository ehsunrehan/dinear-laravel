<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;

class RestaurantDashboardController extends Controller
{
    public function index()
    {
        return view('restaurant.dashboard');
    }
}