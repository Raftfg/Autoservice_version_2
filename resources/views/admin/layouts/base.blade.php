<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="vvdf04591obyfuawQ0FIW9kb21ntNtdPU5DbJO2F">
            <title>ASP ADMIN</title>

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


            <!-- Styles -->
            <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">
            <!-- Favicons -->
             <!-- Site Icons -->
        <link rel="shortcut icon" href="{{asset('assets/autoimages/logoremo.png')}}" type="image/x-icon"> 
       
            <link rel="stylesheet" href="{{ asset('admin_assets/img/favicon.png')}}">
            <link rel="apple-touch-icon" href="{{ asset('admin_assets/img/apple-touch-icon.png')}}">

            <!-- Google Fonts -->
            <link href="https://fonts.gstatic.com" rel="preconnect">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/boxicons/css/boxicons.min.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/quill/quill.snow.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/quill/quill.bubble.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/remixicon/remixicon.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/vendor/simple-datatables/style.css')}}">
            <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css')}}">
            <!-- Template Main CSS File -->
    </head>
    <body>

        @yield('contenu')
        <!-- Vendor JS Files -->
        <script src="{{asset('admin_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/chart.js/chart.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/quill/quill.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('admin_assets/js/main.js')}}"></script>
    </body>
</html>
