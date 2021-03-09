<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get();
        return view('view',['user' => $user]);
    }

    public function update()
    {
        $idc = Auth::id();
        $user = DB::table('users')->where('id', $idc)->get();
        $videos= Video::find($video->id);
        //$videos = DB::table('videos')->get();
        //$videos = DB::table('videos')->where('id', $video->id)->first();
        return view('edit',['user' => $user, 'videos', $videos]);
    }

    public function new()
    {
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get();

        return view('new',['user' => $user]);
    }

    public function newVideo(Request $request)
    {
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get();

        //dd($request);

        $video=Video::create([
            'title'=>$request->title,
            'route'=>$request->route,
            'description'=>$request->description,
            'user_id'=>$id,
            'time'=>$request->time,
        ]);

        return redirect()->route('videos');
    }

    public function edit()
    {
        return view('edit');
    }
}
