{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
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
        <input type="submit" value="Login" />
        <div class="signup_link">Not a member? <a href="/register">Signup</a></div>
    </form>

    <a href="{{ route('auth.google') }}" style="margin-top: 0px !important;background: #C84130;color: #ffffff;padding: 8px;border-radius:6px;" class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white text-center uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-4">
        <strong>Login with Google</strong>
    </a>

</body>
<link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="login-page">
        <div class="overlap-wrapper">
            <div class="overlap">
                <div class="app-root-cu-login">
                    <div class="overlap-group">
                        <img class="div-login-page-new" src="img/login_bg_new.png" />
                        <div class="div">
                            <div class="overlap-2">
                                <div class="don-t-have-an">Don't have an account?</div>
                                <a href="register">
                                <div class="link">
                                    <div class="text-wrapper">Sign Up</div>
                                </div>
                                </a>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                            @csrf
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
                        </div>
                        </form>
                        <div class="div-login-page-new-4">
                            <div class="overlap-5">
                                <p class="p">This site is protected by reCAPTCHA and the Google</p>
                                <div class="link-3"><div class="text-wrapper-7">Privacy Policy</div></div>
                            </div>
                            <div class="overlap-6">
                                <div class="and">and</div>
                                <div class="link-4"><div class="text-wrapper-8">Terms of Service</div></div>
                            </div>
                            <div class="apply">apply.</div>
                        </div>
                    </div>
                    <img class="frame" src="img/namalogo.png" />
                </div>
                <div class="don-t-have-an-2">Don't have an account?</div>
                <a href="register"><div class="link-5"><div class="text-wrapper-9">Sign Up</div></div></a>
            </div>
        </div>
    </div>
</body>
</html>
