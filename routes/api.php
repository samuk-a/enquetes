<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SurveyController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:api')->group(function() {
    Route::resource('survey', SurveyController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('user', UserController::class);
});

Route::post('/login', function(Request $request) {

});

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact support@ponteon.com'
    ], 404);
});