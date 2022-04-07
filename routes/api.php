<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\CarModel;
use App\Models\City;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/models/{id}', function ($id) {
    $model = CarModel::where('brand_id', $id)->get();
    return response()->json($model);
});


Route::get('/provincia/{regione}', function ($regione) {
    $province = DB::table('cities')
        ->select('provincia')
        ->where('regione', $regione)
        ->distinct()
        ->get();
    return response()->json($province);
});


Route::get('/comune/{provincia}', function ($provincia) {
    $modello = City::where('provincia', $provincia)->get();
    return response()->json($modello);
});
