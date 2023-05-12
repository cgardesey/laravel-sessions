<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Notifications\SubscriptionRenewalFailed;
use App\User;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) {

//    $user = User::first();
//
//    $user->notify(new SubscriptionRenewalFailed());
//
//    return 'Done';

//    return session('name');

//    return session('foobar', 'A default');
//    session(['name' => 'JohnDoe']);

//    session(['name' => 'JohnDoe'])->push
//    session(['name' => 'JohnDoe'])->pull
//    session()->forget('name');

//    $request->session()->put('foobar', 'baz');
//    return $request->session()->get('foobar');
//    return $request->session()->get('zzz', 'default');

    return view('welcome');
});

Route::get('projects/create', function () {
    return view('projects.create');
});

Route::post('projects', function () {
//    validate the project
//    save the project

   flash('Your project has been created.');

//    return redirect('/')->with('message', 'Your project has been created.');

    return redirect('/');
});