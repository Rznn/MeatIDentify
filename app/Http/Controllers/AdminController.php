<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalImages = Image::count();
        $averageRating = round(Review::avg('rate'), 2);
        $recentImages = Image::latest()->take(3)->get();
        // Mengonversi waktu uploaded_at menjadi objek Carbon
        foreach ($recentImages as $image) {
            $image->uploaded_at = Carbon::parse($image->uploaded_at);
        }
        return view('admin.dashboard', [
            'totalImages' => $totalImages,
            'averageRating' => $averageRating,
            'recentImages' => $recentImages,
        ]);
    }

    public function control()
    {
        $images = Image::latest()->paginate(4);
        return view('admin.control', [
            'images' => $images
        ]);
    }

    public function delete($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect('/admin/control');
    }

    public function manage()
    {
        $images = Image::onlyTrashed()->paginate(4);
        return view('admin.manage', [
            'images' => $images
        ]);
    }

    public function restore($id)
    {
        $image = Image::withTrashed()->findOrFail($id);
        $image->restore();

        return redirect('/admin/manage');
    }
}
