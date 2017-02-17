<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Font from Google -->
    <link href="https://fonts.googleapis.com/css?family=Bitter|Open+Sans:400,700" rel="stylesheet">

    <!-- Modernizr -->
    <script src="/dist/modernizr-development-build.min.js"></script>

    <!-- Apply respond.js for older IE only -->
    <!--[if lt IE 9]>
        <script src="/dist/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>