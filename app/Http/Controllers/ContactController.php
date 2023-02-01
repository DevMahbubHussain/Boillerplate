<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');

    }
    public function users($userId,$userName)
    {
        return response()->json([
           'userId'=>$userId,
           'userName'=>$userName,
        ]);
    }

    
}
