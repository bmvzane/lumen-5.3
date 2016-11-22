<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    file_put_contents(storage_path('test.csv'), 'a,b,c');
    return response()->download(storage_path('test.csv'))->deleteFileAfterSend(true);
});
