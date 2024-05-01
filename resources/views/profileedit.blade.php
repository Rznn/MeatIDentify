<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="pagewrapper">
        <nav>
          <div class="right">
            <div class="logo"><img src="img/logo.png" alt="" /></div>
            <div class="navigation">
              <a href="dashboard">Home</a><a href="history">History</a><a href="">Profile</a>
            </div>
          </div>
  
          <div class="login"><img src="img/profile.svg" alt=""><a href="{{ route('logout') }}">Username</a></div>
        </nav>
    </div>

    <div class="div-login-page-new-2">
        <div class="cu-login-form">Welcome!</div>
        <div class="cu-login-form-form">
            {{-- <div class="text-wrapper-2"> --}}
                <input type="submit" value="Log in" class="submit-btn"/>
                {{-- </div> --}}
            </div>
        </a>
        <div class="cu-login-form-form-2">Email</div>
        <div class="overlap-3">
            {{-- input email --}}
            <div class="input-log">
                <input class="new-input" placeholder="Enter your email" type="email" name="email" id="email" required>
            </div>
        </div>
        <div class="cu-login-form-form-3">Password</div>
        <div class="overlap-4">
            {{-- input pass --}}
            <div class="input-log">
                 <input class="new-input" type="password" name="password" id="password" placeholder="Enter password" autocomplete="new-password" required>
                 </div>
                </div>
                 <div class="cu-login-form-form-4">Forgot Password?</div>
                  <div class="overlap-group-2">
                       <div class="cu-login-form-form-5"></div>
                        <a href="{{ route('auth.google') }}">
                             <div class="body-button">
                                  <img class="SVG" src="img/login_ikon3.png" />
                                    <div class="span"><div class="text-wrapper-5">Sign in with Google</div></div>
                                 </div>
                                   </a>
                                 </div>
                                 <div class="link-2">
                                     <img class="SVG-2" src="img/login_ikon4.png" />
                                      <div class="div-login-page-new-3"><div class="text-wrapper-6">Help</div></div>
                                     </div>
                            </div>
</body>
</html>