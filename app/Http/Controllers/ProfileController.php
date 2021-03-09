<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get();
        return view('profile',['user' => $user]);
    }

    public function update(Request $request)
    {
        //dd($request);

        $id = Auth::id();
        $user=User::find($id);
        $user->update(['name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role_id'=>$request->role,
        ]);

        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get();

        return view('profile',['user' => $user]);
    }
}
