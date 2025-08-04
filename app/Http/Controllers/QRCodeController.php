<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        // Generate a QR Code for a Link
        return QrCode::size(300)->generate('https://github.com/shayanahmad1999');
    }

    public function SaveQRCode(){
        //  Generate and Save a QR Code
        $directory = public_path('qrcode');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }
        $filename = 'qr_' . uniqid() . '.png';
        $path = public_path('qrcode/' . $filename);
        QrCode::size(300)->generate('A simple QR code example', $path);
        return response()->download($path);
    }

    public function QRCodeCustomBackgroundColor() {
        // Generate a QR Code with Custom Background Color
        return QrCode::size(300)
                     ->backgroundColor(125, 155, 65)
                     ->generate('https://github.com/shayanahmad1999');
    }

    //for this please first install the imagick extension
    public function QRCodeEmbeddedImage(){
        // Generate a QR Code with an Embedded Image
        $directory = public_path('images');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }
        $image = QrCode::format('png')
                       ->merge(public_path('images/logo.png'), 0.5, true)
                       ->size(500)
                       ->errorCorrection('H')
                       ->generate('A simple QR code example');
        return response($image)->header('Content-type', 'image/png');
    }

    public function QRCodeEmail() {
        // Generate a QR Code for an Email
        return QrCode::size(500)
                     ->email('shayanahmad235@gmail.com', 'Welcome!', 'This is a test email.');
    }

    public function QRCodePhoneNumber() {
        // Generate a QR Code for a Phone Number
        return QrCode::size(300)->phoneNumber('+92-3168871033');
    }

    public function QRCodeSMS() {
       // Generate a QR Code for an SMS
        return QrCode::size(300)->SMS('+92-3168871033', 'Hello, this is a test message!');
    }

    public function QRCodeBladeTemplate() {
       // Generate a QR Code in a Blade Template
         return view('qrCode');
    }
}
