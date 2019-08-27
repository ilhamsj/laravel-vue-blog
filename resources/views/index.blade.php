<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('app_env') }}</title>
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <router-view name="home"></router-view>
    </div>
    <script src="{{ secure_asset('js/app.js') }}"></script>
</body>
</html>