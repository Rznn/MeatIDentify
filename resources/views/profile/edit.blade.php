@section('title', 'Edit Profile')
@include('layouts.navbar')

    <div class="container">
        <h1 class="centered-heading">Edit Profile</h1>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="input" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="input" name="name" value="{{ $user->name }}">
            </div>

            <button type="submit" class="button">Update Profile</button>

            {{-- <button type="submit" class="button">Update Profile</button> --}}
        </form><br />

        <h1 class="centered-heading">Change Password</h1>
        <form action="{{ route('profile.updatePassword') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" placeholder="Enter current password">
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="password" placeholder="Enter new password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm New Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm new password">
            </div>

            <button type="submit" class="button">Change Password</button>
        </form>
    </div>
    <script>
        document.getElementById('editProfileBtn').addEventListener('click', function() {
            var inputs = document.querySelectorAll('.input');
            inputs.forEach(function(input) {
                input.removeAttribute('readonly');
            });

            document.querySelector('form').querySelector('button[type="submit"]').style.display = 'block';
            this.style.display = 'none'; // Sembunyikan tombol "Edit Profile"
        });

    </script>
