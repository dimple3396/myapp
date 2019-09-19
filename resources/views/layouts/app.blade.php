<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CSR') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script type="text/javascript" src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
   <script type="text/javascript" >
    CKEDITOR.replace('article-ckeditor');
    </script>
   <link href="assets/css/ckeditor/contents.css" rel="stylesheet">
   <link href="assets/css/ckeditor/skins/boostrap/editor.css" rel="stylesheet">
   <link href="assets/css/ckeditor/skins/boostrap/editor_gecko.css" rel="stylesheet">
   <script src="assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
   <script src="assets/js/ckeditor/styles.js" type="text/javascript"></script>
   <script src="assets/js/ckeditor/config.js" type="text/javascript"></script>
   <script src="assets/js/ckeditor/lang/en.js" type="text/javascript"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </div>

</body>
</html>
