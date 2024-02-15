<!DOCTYPE html>
<html>
    <head>
        <title>Appraisal</title>
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="test test2 bg-red-700">
            <h1>hello</h1>
        </div>
        <h2><a href="{{ route('login') }}">login</a></h2>
        <div id="appvue"></div>
        <a href="{{ route('admin') }}">Go to Admin Panel</a>
    </body>
</html>
