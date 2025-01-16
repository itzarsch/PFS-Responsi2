<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan halaman profil
    public function showProfile()
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    // Menampilkan form untuk mengganti password
    public function showChangePasswordForm()
    {
        return view('change-password');
    }

    // Menangani pengubahan password
    public function changePassword(Request $request)
    {
        // Validasi password lama dan baru
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        // Cek apakah password lama cocok
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Password lama salah']);
        }

        // Update password pengguna
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('profile')->with('status', 'Password berhasil diubah');
    }
}
