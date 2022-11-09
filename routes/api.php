<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/status', function (Request $request){
    return response()->json(['status' => 'success']);
});

Route::post('/sendTemp', function (Request $request){
    file_put_contents("php://stderr", "temp :".$request->input('temp')."\n");
    return response()->json(['status' => 'success', 'temp' => $request->input('temp')]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
