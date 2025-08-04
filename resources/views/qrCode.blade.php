<!DOCTYPE html>
<html>
<head>
    <title>Laravel 12 QR Code Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 text-center">
        <h3>Laravel 12 QR Code Example</h3>
        <div class="mt-4">
            {!! QrCode::size(200)->generate('https://www.linkedin.com/in/shayan-ahmad-khan-53b743211/') !!}
            <p>Scan the QR code above.</p>
        </div>
    </div>
</body>
</html>