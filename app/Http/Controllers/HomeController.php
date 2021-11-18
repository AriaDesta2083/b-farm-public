<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use App\Models\Ulasan;
use App\Models\User;
use App\Models\WebProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ulasan = Ulasan::select('ulasan.*', 'users.name', 'users.email')
                        ->join('users', 'users.id', 'ulasan.user')
                        ->orderBy('ulasan.created_at', 'DESC')
                        ->get();

        $list = Rekomendasi::orderBy('judul_menu')->get();

        $profile = WebProfile::first();

        $data = array(
            'ulasan' => $ulasan,
            'data' => $list,
            'profile' => $profile
        );

        return view('welcome', $data);
    }

    public function storeUlasan(Request $request)
    {
        if(isset(auth()->user()->id)) {
            $newUlasan = new Ulasan;
            $newUlasan->user = auth()->user()->id;
            $newUlasan->subjek = $request->subject;
            $newUlasan->pesan = $request->message;

            $newUlasan->save();

            return back();
        }
        else {
            return view('auth.login');
        }
    }

    public function profile()
    {
        $profile = User::find(auth()->user()->id);

        $data = array(
            'data' => $profile
        );

        return view('profile.index', $data);
    }

    public function updateProfile($id, Request $request)
    {
        $profile = User::find($id);

        $profile->name = $request->nama;
        $profile->email = $request->email;
        $profile->alamat = $request->alamat;
        $profile->phone = $request->phone;
        $profile->password = $request->password;

        $profile->save();

        return back();
    }
}
