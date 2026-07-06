<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Restaurant\RestaurantDashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;





Route::post('/save-previous-page', function (Request $request) {

    Session::put('previous_page', $request->previous_page);

    return response()->json([
        'success' => true
    ]);

});


Route::get('/', [WebController::class, 'index']);


Route::get('/burger', [WebController::class, 'burger'])->name('burger.3d');

Route::get('/tikka', [WebController::class, 'tikka'])->name('tikka.3d');

// Route::get('/fried_chicken', [WebController::class, 'fried_chicken'])->name('fried_chicken.3d');

Route::get('/boti_roll', [WebController::class, 'boti_roll'])->name('boti_roll.3d');

Route::get('/foods', [WebController::class, 'foods'])->name('foods');

    Route::get('/food/{food}', [WebController::class,'showFood'])
        ->name('user.food.show');

Route::middleware([
    'auth',
    'verified'
])->prefix('admin')->group(function () {

    Route::resource('food', FoodController::class);

});



Route::middleware([
    'auth',
    'verified',
    'restaurant'
])->prefix('restaurant')->name('restaurant.')->group(function () {

    Route::get('/dashboard', [RestaurantDashboardController::class, 'index'])
        ->name('dashboard');

});



// if(Auth::id()){
// if(Auth::User()->user_role == "0"){
// return view('user.index');
// }
// else{
// return view('admin.index');
// }
// }
// else{
// return redirect()->back();
// }





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {

        if (Auth::user()->isAdmin()) {
            return redirect('/admin/food');
        }

        if (Auth::user()->isRestaurant()) {
            return redirect('/restaurant/dashboard');
        }

        return redirect('/');   

    })->name('dashboard');

});