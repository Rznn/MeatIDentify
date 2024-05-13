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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Register</title>
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
                    <p>Already have an account?</p>
                </div>
                <div class="login">
                    <div class="img-holder">
                        <img src="img/profile.svg" alt="">
                    </div>
                    <a href="login">Sign In</a>
                </div>
            </div>
        </nav>

        <div class="main">
            <div class="background">
                <img src="img/login_bg_new.png" alt="">
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h3>Create an Account!</h3>

                <label for="name">Name</label>
                <input type="name" name="name" id="name"  placeholder="Enter your name" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email"  placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="new-password"  placeholder="Enter password" required>

                <label for="password">Confirm Password</label>
                <input type="password" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" placeholder="Confirm password" required>

                <input type="submit" class="button" value="Sign in">
                <a href="{{ route('auth.google') }}">
                    <div class="social">
                        <div class="go"><i class="fab fa-google"></i> Sign up with Google</div>
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

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
<body>
</html>
