<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="icon" href="{{ asset('img/logo-only.png') }}" type="image/x-icon"/>
</head>
<body>
    <div class="page-wrapper">
        <div class="sidebar">
            <div class="title">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="navigation">
                <a href="/admin/dashboard">Dashboard</a>
                <a href="/admin/control">Control</a>
                <a href="/admin/manage">Manage</a>
            </div>
            <div class="logout">
                <a href="{{ route('logout') }}">Log out</a>
            </div>
        </div>

        <div class="main">
            <div class="heading">
                <h1>@yield('title')</h1>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
