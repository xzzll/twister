<?php

namespace App\Http\Controllers;

use App\Twist;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function test(Request $rq)
    {
        $rq = $rq->all();
        return view('test',compact('rq'));
    }
    public function insert(Request $rq){

        return view('insert');
    }


}
