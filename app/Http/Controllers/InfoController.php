<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $item = [
            'content' => 'Info',
        ];
        return view('index',$item);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('index', $item);
    }
}
