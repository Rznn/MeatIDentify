<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show()
    {
        $auth = Auth::user();
        $user = User::find($auth->id);
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $auth = Auth::user();
        $user = User::find($auth->id);
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $auth = Auth::user();
        $user = User::find($auth->id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        if ($user->email !== $request->email) {
            return redirect()->back()->withErrors(['email' => 'Email cannot be changed.'])->withInput();
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $auth = Auth::user();
        $user = User::find($auth->id);
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profile.show')->with('success', 'Password updated successfully.');
    }
}
