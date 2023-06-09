<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Welcome';
    }

    public function user(Request $request){
        return $request->user();
    }
}
