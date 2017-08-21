<?php

namespace App\Http\Controllers;

use App\Twist;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function test()
    {
        return view('test');
    }
    public function insert(){
        return view('insert');
    }


}
