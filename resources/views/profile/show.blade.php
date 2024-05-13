@section('title', 'Profile')
@include('layouts.navbar')

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
