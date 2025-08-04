<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Toastr JS Notifications') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
  
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
  
<body>
      <div class="container">
        @yield('content')
       </div>
    <script>

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        // --- For more toastr option please click below link --- //
            // https://codeseven.github.io/toastr/demo.html

        // --- You can also explore the GitHub repository for more advanced usage and updates. ---  //
            // https://github.com/CodeSeven/toastr
       
        @session("success")
        toastr.success('{{ session("success") }}');
        @endsession
 
        @session("info")
        toastr.info('{{ session("info") }}');
        @endsession
 
        @session("error")
        toastr.error('{{ session("error") }}');
        @endsession
 
        @session("warning")
        toastr.warning('{{ session("warning") }}');
        @endsession
            
    </script>
  
</body>
  
</html>