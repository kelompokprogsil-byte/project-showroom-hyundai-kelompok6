<?php

use Illuminate\Support\Facades\Route;

// ===== LOGIN ROUTE =====
// LOGIN & REGISTER USER
Route::get('/login_user', function () {
    return view('login_page');
});

Route::get('/register_user', function () {
    return view('register_page');
});

// LOGIN ADMIN
Route::get('/admin/login_admin', function () {
    return view('admin/login_admin_page');
});
// ===== LOGIN ROUTE =====


// ===== USER ROUTE =====
// DEFAULT PAGE
Route::get('/', function () {
    return view('index', ['title' => 'Hyundai Tegal Rotan']);
});

Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});

Route::get('/reparation', function () {
    return view('reparation', ['title' => 'Reparation']);
});


// PERSONALIZATION
Route::get('/career', function () {
    return view('career', ['title' => 'Career on Hyundai']);
});

Route::get('/dealer', function () {
    return view('dealer', ['title' => 'Dealer']);
});

Route::get('/showroom_live', function () {
    return view('showroom_live', ['title' => 'Showroom Live']);
});


// EXPERIENCE
Route::get('/warranty', function () {
    return view('warranty', ['title' => 'Warranty']);
});

Route::get('/testimony', function () {
    return view('testimony', ['title' => 'Testimony']);
});

Route::get('/services', function () {
    return view('services', ['title' => 'Services']);
});
// ===== USER ROUTE =====


// ===== ADMIN ROUTE =====
Route::get('/admin/dashboard', function () {
    return view('admin/dashboard_admin', ['title' => 'Hyundai Tegal Rotan']);
});