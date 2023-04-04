<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function captureImage()
    {
        return view('capture');
    }

    public function compareWithML(Request $request)
    {
        dd($request->user_image);
    }
}
