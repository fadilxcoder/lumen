<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyController extends Controller
{
    
    public function index()
    {
        $data['posts'] = DB::table('posts')->get();
        return view('home-page', $data);
    }

    public function post($id)
    {
        $data['post'] = DB::table('posts')->where('id', $id)->get();
        $data['comments'] = DB::table('comments')->where('post_id', $id)->get();
        return view('post', $data);
    }
    
    public function submitPost(Request $request)
    {
        $message = $request->input('message');
        $post_id = $request->segment(2);
        $arr = array();
        $arr['post_id'] = $post_id;
        $arr['message'] = $message;
        DB::table('comments')->insert($arr);
        return redirect()->route('post', ['id'=> $post_id]);
    }
}
