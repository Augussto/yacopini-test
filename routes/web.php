<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use App\Models\sell;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
*/


Route::view('/','welcome');
Route::view('login','login')->name('login')->middleware('guest');
Route::view('dashboard','dashboard')->middleware('auth');
Route::view('insert','insert')->middleware('auth');

//INICIO LOGIN
Route::post('login',function(){
    $credentials = request()->only('email','password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('dashboard');
    }
    return redirect('login');
});
Route::post('logout',function(){
    Auth::logout();
    return redirect('/');
});
//FIN LOGIN
///////////////////

//CRUD
Route::resource('sells','PostController');


//Show table sell on dashboard
Route::get('dashboard',function(){
    $sells = sell::all();
    return view('dashboard',['sells'=>$sells]);
});



/*
Route::get('insert',function(){
    return view('insert');
});

Route::post('insert',function(Request $request){

    //return $request->all();
    $request->validate([
        'marca' => 'required',
        'modelo' => 'required',
        'color' => 'required',
        'año' => 'required',
        'precio' => 'required'
    ]);

    Post::create([ $request->all()]);
    return redirect('/');
});*/