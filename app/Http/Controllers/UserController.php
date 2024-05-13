<?php

namespace App\Http\Controllers;

use App\Actions\PredictionHelper;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $recentImages = Image::where('user_id', $user->id)->latest()->take(3)->get();

        // Mengonversi waktu uploaded_at menjadi objek Carbon
        foreach ($recentImages as $image) {
            $image->uploaded_at = Carbon::parse($image->uploaded_at);
        }

        return view('dashboard', [
            'recent_image' => $recentImages,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        // Simpan gambar ke penyimpanan
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file('image')->storeAs('images', $imageName);

        // Kirim file gambar ke API
        $response = Http::attach(
            'file',
            file_get_contents($image),
            'image.jpg'
        )->post('https://7a44-34-138-16-51.ngrok-free.app/predict');

        // Tanggapi hasil prediksi
        $prediction = $response->json();

        if ($response->successful()) {
            // Ambil predicted_class dan probabilities dari respons JSON
            $predictedClass = $prediction['predicted_class'];
            $probabilities = $prediction['probabilities_class'];
        } else {
            return back()->with('error', 'Failed to get prediction from API');
        }

        // Menentukan meat_id berdasarkan predicted_class
        $meatId = null;
        switch ($predictedClass) {
            case 'Horse':
                $meatId = 1;
                break;
            case 'Meat':
                $meatId = 2;
                break;
            case 'Pork':
                $meatId = 3;
                break;
            default:
                // Default action, jika kelas yang diprediksi tidak sesuai dengan yang diharapkan
                break;
        }

        $current_user = Auth::user()->id;

        // Simpan hasil prediksi ke dalam database
        $imageData = [
            'user_id' => $current_user,
            'meat_id' => $meatId,
            'image_path' => $imageName,
            'uploaded_at' => now(),
            'probability' => $probabilities,
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
        $user = Auth::user();
        $recentImages = $user->images->all();

        // Mengonversi waktu uploaded_at menjadi objek Carbon
        foreach ($recentImages as $image) {
            $image->uploaded_at = Carbon::parse($image->uploaded_at);
        }

        return view('history', [
            'recent_image' => $recentImages,
        ]);
    }
}
