<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke penyimpanan
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file('image')->storeAs('images', $imageName);
        $request['image_path'] = $imageName;

        // Buat data baru untuk disimpan dalam database
        $imageData = [
            'user_id' => $request->user_id, // Anda mungkin perlu menyesuaikan ini dengan cara otentikasi pengguna Anda
            'meat_id' => $request->meat_id, // Anda mungkin perlu menyesuaikan ini dengan cara Anda menyimpan meat_id
            'image_path' => $imageName,
            'uploaded_at' => now(),
        ];

        // Simpan data gambar ke database
        $image = Image::create($imageData);

        // Redirect ke halaman hasil dengan ID gambar
        return redirect()->route('result', ['id' => $image->id]);
    }

    public function show($id)
    {
        $image = Image::findOrFail($id);
        return view('result', ['image' => $image]);
    }

    public function history()
    {
        return view('history');
    }
}
