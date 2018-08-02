<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
//    return view('welcome');

    $data = [
        'title'=>'TItulo',
        'content'=>'Content',
    ];


    Mail::send('emails.test',$data, function($message){
        $message->to('leagurru@yahoo.com.ar','LG yahoo')->subject('Subject');
    });

});
