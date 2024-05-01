<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/dashstyle.css" />
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
        <ul class="profile-menu">
            <li><a href="{{ route('profile.show') }}">View Profile</a></li>
            <li><a href="{{ route('profile.edit') }}" class="btn-primary">Edit Profile</a></li>
        </ul>
        <div class="profile-form">
            <h2>Edit Profile</h2>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}">
                </div>

                <button type="submit">Update Profile</button>
            </form>

            <h2>Change Password</h2>
            <form action="{{ route('profile.updatePassword') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password">
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" name="password_confirmation">
                </div>

                <button type="submit">Change Password</button>
            </form>
        </div>
    </div>
</body>
</html>
