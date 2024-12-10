<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return App\Models\User::create([
        'name' => 'Test',
        'email' => 'test@test.com',
        'password' => Hash::make('password'),
        'data' => [
            'custom_value' => 1
        ]
    ]);
});
