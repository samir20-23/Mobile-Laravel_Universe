<?php
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

// use App\Http\Controllers\contactcontroller;

Route::get('/', function () {
    Mail::to('germanysamir1@gmail.com')
    ->send(new HelloMail());
});

// web  test