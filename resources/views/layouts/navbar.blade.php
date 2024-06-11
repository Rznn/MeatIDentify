<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>@yield('title')</title>
      <link href="{{ asset('css/resultstyle.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dashstyle.css') }}" rel="stylesheet">
      <link rel="icon" href="{{ asset('img/logo-only.png') }}" type="image/x-icon"/>
      {{-- <link href="{{ asset('css/globals.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
  </head>
  <body>
    <nav>
      <div class="right">
        <div class="logo"><a href="/dashboard"><img src="{{ asset('img/logo.png') }}" alt="" /></a></div>
        <div class="navigation">
          <a href="/dashboard">Home</a><a href="/history">History</a>
        </div>
      </div>
      <div class="dropdown">
        <div onclick="toggleDropdown()" class="login">
          <img src="{{ asset('img/profile.svg') }}" alt="">
          <a>{{ Auth::user()->name }}</a>
        </div>
        <div id="myDropdown" class="dropdown-content">
          <a class="dropdown-header" href="/dashboard">MeatIDentify</a>
          <hr>
          <a class="dropdown-item" href="{{ route('profile.show') }}">
            <img src="{{ asset('img/edit-profile.svg') }}" alt="">
            <p>Profile</p>
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}">
            <img src="{{ asset('img/logout.svg') }}" alt="">
            <p>Log Out</p>
          </a>
      </div>
      </div>
    </nav>
  <script>
      function toggleDropdown() {
        var dropdown = document.getElementById("myDropdown");
        console.log(dropdown.style.display)
        if (dropdown.style.display === "none" || dropdown.style.display === "") {
          dropdown.style.display = "block";
        } else {
              dropdown.style.display = "none";
          }
      }

      // Untuk menutup dropdown saat mengklik di luar dropdown
      // window.onclick = function(event) {
      //     if (!event.target.matches('.dropbtn')) {
      //         var dropdowns = document.getElementsByClassName("dropdown-content");
      //         for (var i = 0; i < dropdowns.length; i++) {
      //             var openDropdown = dropdowns[i];
      //             if (openDropdown.style.display === "block") {
      //                 openDropdown.style.display = "none";
      //             }
      //         }
      //     }
      // }
  </script>
