<?php

use App\Http\Controllers\Prospects;
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

/* Get Request for the API to show all current prospects / leads on the CRM */

Route::get('/prospects', [Prospects\ProspectsController::class, 'index']);

/* Post request to create a prospect on the database via API */

Route::post('/prospects', [Prospects\ProspectsController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
