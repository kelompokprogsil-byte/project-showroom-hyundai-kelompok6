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
Route::get('/company_page', function () {
    return view('company_page', ['title' => 'Company Page']);
});

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


// FORM
Route::get('/booking', function () {
    return view('booking', );
});

Route::get('/trade', function () {
    return view('trade', );
});

Route::get('/reparation-form', function () {
    return view('reparation-form', );
});

Route::get('/test-drive', function () {
    return view('test-drive', );
});

// KATALOG
Route::get('/katalog', function () {
    return view('katalog', );
});
// ===== USER ROUTE =====


// ===== ADMIN ROUTE =====
Route::get('admin/dashboard', function () {
    return view('admin/dashboard_admin', );
});

Route::get('admin/daftar_user', function () {
    return view('admin/daftar_user',);
});

Route::get('admin/daftar_mobil', function () {
    return view('admin/daftar_mobil');
});

Route::get('admin/daftar_dealer', function () {
    return view('admin/daftar_dealer');
});

Route::get('admin/daftar_transaksi', function () {
    return view('admin/daftar_transaksi');
});


Route::get('admin/daftar_layanan', function () {
    return view('admin/daftar_layanan');
});

Route::get('admin/daftar_kategori', function () {
    return view('admin/daftar_kategori');
});

Route::get('admin/daftar_stok', function () {
    return view('admin/daftar_stok');
});