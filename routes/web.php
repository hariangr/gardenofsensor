<?php

use Illuminate\Support\Facades\Route;
use \App\Models\TimeSeries;

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

Route::get('/', function () {
    // $all = TimeSeries::orderBy('created_at')->get();

    // $labels = [];
    // $fields1 = [];
    // $fields2 = [];
    // $fields3 = [];
    // $fields4 = [];
    // foreach ($all as $it) {
    //     array_push($labels, $it['created_at']);
    //     array_push($fields1, $it['field1']);
    //     array_push($fields2, $it['field2']);
    //     array_push($fields3, $it['field3']);
    //     array_push($fields4, $it['field4']);
    // }

    // $labels = json_encode($labels);
    // $fields1 = json_encode($fields1);
    // $fields2 = json_encode($fields2);
    // $fields3 = json_encode($fields3);
    // $fields4 = json_encode($fields4);

    return view('home');
});
