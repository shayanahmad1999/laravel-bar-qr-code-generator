<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BarcodeController extends Controller
{
    // Display barcode as PNG image
    public function show()
    {
        $generator = new BarcodeGeneratorPNG();
        $image = $generator->getBarcode('000005263635', $generator::TYPE_CODE_128);

        return response($image)->header('Content-Type', 'image/png');
    }

    // Generate and save barcode
    public function save()
    {
        $generator = new BarcodeGeneratorPNG();
        $image = $generator->getBarcode('000005263635', $generator::TYPE_CODE_128);

        $path = 'barcodes/demo-' . time() . '.png';
        Storage::put($path, $image);

        return response($image)->header('Content-Type', 'image/png');
    }

    // Display barcode in Blade view
    public function blade(): View
    {
        $generator = new BarcodeGeneratorHTML();
        $barcode = $generator->getBarcode('0001245259636', $generator::TYPE_CODE_128);

        return view('barcode', compact('barcode'));
    }
}
