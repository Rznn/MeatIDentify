<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/dashstyle.css" />
</head>
<body>
    <div class="pagewrapper">
        <nav>
          <div class="right">
            <div class="logo"><img src="img/logo.png" alt="" /></div>
            <div class="navigation">
              <a href="dashboard">Home</a><a href="history">History</a><a href="profile">Profile</a>
            </div>
          </div>
  
          <div class="login"><img src="img/profile.svg" alt=""><a href="{{ route('logout') }}">Username</a></div>
        </nav>
    </div>

    <div class="container">
      <h1 class="centered-heading">Profile</h1>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $user->email }}" readonly>
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user->name }}" readonly>
      </div>

      <a href="{{ route('profile.edit') }}" id="editProfileBtn" class="button">Edit Profile</a>
    </div>
</body>
</html>
