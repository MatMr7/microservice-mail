<?php

use App\Jobs\CompanyCreated;
use App\Mail\CompanyCreatedWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
Route::get('/', function () {
    return response()->json(['message' => 'success']);
});

Route::get('/teste', function () {
    CompanyCreated::dispatch('matheuzinhogostoso@mail')->onQueue('queue_mail');
});
