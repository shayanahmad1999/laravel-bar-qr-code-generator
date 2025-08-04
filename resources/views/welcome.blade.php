<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR & Barcode Actions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .transition-all {
            transition: all 0.3s ease;
            border-radius: 8px;
        }
        .transition-all:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="bg-light p-5">

    <div class="container text-center">
        <h2 class="mb-4">📌 QR Code & Barcode Actions</h2>

        <a href="{{ route('barcode.show') }}" class="btn btn-primary mx-2 transition-all">Show Barcode</a>
        <a href="{{ route('barcode.save') }}" class="btn btn-outline-primary mx-2 transition-all">Save Barcode</a>
        <a href="{{ route('barcode.blade') }}" class="btn btn-info mx-2 transition-all">Barcode Blade</a>

        <hr class="my-4">

        <a href="{{ route('qr.code') }}" class="btn btn-success mx-2 transition-all">Generate QR Code</a>
        <a href="{{ route('qr.code.save') }}" class="btn btn-warning mx-2 transition-all">Generate QR Code And Save</a>
        <a href="{{ route('qr.code.color') }}" class="btn btn-danger mx-2 transition-all">QR with BG Color</a>
        {{-- //for this please first install the imagick extension --}}
        {{-- <a href="{{ route('qr.code.image') }}" class="btn btn-warning mx-2 transition-all">QR with Image</a> --}}
        <a href="{{ route('qr.code.email') }}" class="btn btn-outline-success mx-2 transition-all">QR via Email</a>
        <a href="{{ route('qr.code.phone') }}" class="btn btn-outline-warning mx-2 transition-all">QR Phone</a>
        <a href="{{ route('qr.code.sms') }}" class="btn btn-outline-danger mx-2 transition-all">QR SMS</a>
        <a href="{{ route('qr.code.blade') }}" class="btn btn-secondary mx-2 transition-all">QR Blade View</a>
    
        <hr class="my-4">

        <h2 class="mb-4">📌 JS Toaster Actions</h2>

        <a href="{{ route('toast') }}" class="btn btn-primary mx-2 transition-all">Show Toast</a>

        <hr class="my-4">
    </div>

</body>
</html>
