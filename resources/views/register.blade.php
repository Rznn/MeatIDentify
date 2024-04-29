{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="txt_field">
            <input type="text" name="name" id="name" required>
            <span></span>
            <label>Name</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" id="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" id="password" autocomplete="new-password" required>
            <span></span>
            <label>Password</label>
        </div>
        <input type="submit" value="Register" />
        <div class="signup_link">Already have an Account? <a href="/login">Login</a></div>
    </form>


    <a href="{{ route('auth.google') }}" style="margin-top: 0px !important;background: #C84130;color: #ffffff;padding: 8px;border-radius:6px;" class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white text-center uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-4">
        <strong>Login with Google</strong>
    </a>
</body>
</html> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <div class="register-page">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="app-root-cu-login">
            <div class="overlap-group">
              <img class="div-login-page-new" src="img/register_bg.png" />
              <div class="div">
                <div class="text-wrapper">Already have an account?</div>
                <div class="link"><a href="login"><div class="text-wrapper-2">Sign in</div></a></div>
                <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="div-login-page-new-2">
                  <div class="cu-login-form">Create an Account</div>
                  <div class="overlap-group-2">
                    <div class="cu-login-form-form">
                        {{-- <div class="text-wrapper-3">Sign Up</div> --}}
                        <input type="submit" value="Sign up" class="submit-btn"/>
                    </div>
                    <div class="cu-login-form-form-2"></div>
                  </div>
                  <div class="cu-login-form-form-3">Email</div>
                  <div class="cu-login-form-form-4">
                    {{-- <div class="div-placeholder"><div class="text-wrapper-4">Enter your email</div></div> --}}
                    {{-- <img class="img" src="img/register_ikon1.png" /> --}}
                    {{-- input email --}}
                    <div class="input-log">
                        <input class="new-input" placeholder="Enter your email" type="email" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="cu-login-form-form-5">Name</div>
                  <div class="cu-login-form-form-6">
                    {{-- <div class="div-wrapper"><div class="text-wrapper-5">Enter your Name</div></div>
                    <img class="cu-login-form-form-7" src="img/register_ikon2.png" /> --}}
                    {{-- input pass --}}
                    <div class="input-log">
                        <input class="new-input" type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                  </div>
                  <div class="cu-login-form-form-8">Password</div>
                  <div class="cu-login-form-form-10">
                    {{-- <div class="div-wrapper"><div class="text-wrapper-6">Enter password</div></div>
                    <img class="cu-login-form-form-7" src="img/register_ikon3.png" /> --}}
                    {{-- input pass --}}
                    <div class="input-log">
                        <input class="new-input" type="password" name="password" id="password" placeholder="Enter password" required>
                    </div>
                  </div>
                  <div class="cu-login-form-form-9">Confirm Password</div>
                  <div class="cu-login-form-form-11">
                    {{-- <div class="div-wrapper"><div class="text-wrapper-7">Confirm password</div></div>
                    <img class="cu-login-form-form-7" src="img/register_ikon4.png" /> --}}
                    <div class="input-log">
                        <input class="new-input" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required>
                    </div>
                  </div>
                  <a href="{{ route('auth.google') }}">
                  <div class="body-button">
                    <img class="SVG" src="img/register_ikon5.png" />
                    <div class="span"><div class="text-wrapper-8">Sign up with Google</div></div>
                  </div>
                  </a>
                  <div class="link-2">
                    <img class="SVG-2" src="img/register_ikon6.png" />
                    <div class="div-login-page-new-3"><div class="text-wrapper-9">Help</div></div>
                  </div>
                </div>
              </div>
              </form>
              <div class="div-login-page-new-4">
                <div class="overlap-2">
                  <p class="p">This site is protected by reCAPTCHA and the Google</p>
                  <div class="link-3"><div class="text-wrapper-10">Privacy Policy</div></div>
                </div>
                <div class="overlap-3">
                  <div class="and">and</div>
                  <div class="link-4"><div class="text-wrapper-11">Terms of Service</div></div>
                </div>
                <div class="apply">apply.</div>
              </div>
            </div>
            <img class="frame" src="img/namalogo.png" />
          </div>
          <div class="text-wrapper-12">Already have an account?</div>
          <a href="login"><div class="link-5"><div class="text-wrapper-13">Sign in</div></div></a>
        </div>
      </div>
    </div>
  </body>
</html>
