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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <div class="page-wrapper">
        <nav>
            <div class="left">
                <div class="logo">
                    <a href="/"><img src="img/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="right">
                <div class="nav-dont">
                    <p>Don't have an account?</p>
                </div>
                <div class="login">
                    <div class="img-holder"><img src="img/profile.svg" alt=""></div>
                    <a href="register">Sign Up</a>
                </div>
            </div>
        </nav>

        <div class="main">
            <div class="background">
                <img src="img/login_bg_new.png" alt="">
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h3>Welcome!</h3>

                <label for="email">Email</label>
                <input type="email" name="email" id="email"  placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="new-password"  placeholder="Enter password" required>

                <input type="submit" class="button" value="Sign in">
                <a href="{{ route('auth.google') }}">
                    <div class="social">
                        <div class="go"><i class="fab fa-google"></i> Sign in with Google</div>
                    </div>
                </a>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <script>
        var errorMessage = @json($errors->all());
        alert(errorMessage.join('\n'));
    </script>
    @endif
<body>
</html>
