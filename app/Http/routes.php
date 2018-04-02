<?php
use App\Post;
use App\User;
use App\Role;

Route::get('/', function () {
    $title = 'Blog';
    return view('welcome', compact('title'));
});
