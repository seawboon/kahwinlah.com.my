<?php

use Illuminate\Http\Request;

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

/*Route::post('/github-hooks', function(){
  Artisan::call('git:deploy');
  exit;
});*/
Route::post('/github-hooks', function () {
  $path = base_path();
  $token = 'token';
  $json = json_decode(file_get_contents('php://input'), true);

  if (empty($json['token']) || $json['token'] !== $token) {
      exit('error request');
  }

  $cmd = "cd $path && git pull";
  shell_exec($cmd);
});
