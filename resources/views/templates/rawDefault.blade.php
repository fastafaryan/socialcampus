<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSRF Protection-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--Videojs-->
        <link href="https://vjs.zencdn.net/5.17.0/video-js.css" rel="stylesheet">
        <!-- If you'd like to support Video Player in IE8 -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
        <!--Snowflake Icons taken from https://icons8.com/-->
        <link rel="shortcut icon" href="/storage/icons/icon.png">
        <!--Font Awesome-->
        <script src="https://use.fontawesome.com/fffe030555.js"></script>
        <!--My Css File-->
        <link rel="stylesheet" href="/css/app.css">
        <!--Pusher-->
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
        <title>Medeniyet Sosyal</title>
    </head>
    <body>
        @yield('content')
        <!--app.js File-->
        <script src="/js/app.js"></script>
    </body>
</html>
