<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\TimeSeries;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/update', function (Request $request) {
//     $newData = new TimeSeries([
//         "field1" => $request['field1'],
//         "field2" => $request['field2'],
//         "field3" => $request['field3'],
//         "field4" => $request['field4'],
//     ]);
//     $newData->save();

//     return response()->json($newData);
// });

Route::get('/getdata', function (Request $request) {
    $response = Http::get('http://api.thingspeak.com/channels/1401216/feed.json');
    $response = $response->json();
    $feeds = $response['feeds'];
    // $feedsSorted = 
    // $timeseries = $response['']

    // $all = TimeSeries::orderByDesc('created_at')->get();
    return response()->json($feeds);
});