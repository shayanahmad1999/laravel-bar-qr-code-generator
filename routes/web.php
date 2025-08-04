<?php

use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\JsToastController;
use App\Http\Controllers\QRCodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('barcode')->controller(BarcodeController::class)->group(function () {
    Route::get('/', 'show')->name('barcode.show');
    Route::get('/save', 'save')->name('barcode.save');
    Route::get('/blade', 'blade')->name('barcode.blade');
});

Route::prefix('qr-code')->controller(QRCodeController::class)->group(function () {
    Route::get('/', 'index')->name('qr.code');
    Route::get('/save', 'SaveQRCode')->name('qr.code.save');
    Route::get('/color', 'QRCodeCustomBackgroundColor')->name('qr.code.color');
    Route::get('/image', 'QRCodeEmbeddedImage')->name('qr.code.image');
    Route::get('/email', 'QRCodeEmail')->name('qr.code.email');
    Route::get('/phone', 'QRCodePhoneNumber')->name('qr.code.phone');
    Route::get('/sms', 'QRCodeSMS')->name('qr.code.sms');
    Route::get('/blade', 'QRCodeBladeTemplate')->name('qr.code.blade');
});

Route::get('/toast', [JsToastController::class,'viewPage'])->name('toast');
Route::post('/store', [JsToastController::class,'store'])->name('toast.store');
