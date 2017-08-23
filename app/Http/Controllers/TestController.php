<?php

namespace App\Http\Controllers;
use App\User;
use App\Twist;
use App\Art;
use App\Ping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function test(Request $rq)
    {
        $yz = $rq->all()['art_content'];
        $yz = trim($yz);
        if (!empty($yz)) {

            $art = new Art;
            $pic_name = $rq->file('pic')->getClientOriginalName();

            $art->art_content = $rq->art_content;
            $art->pic = $rq->file('pic')->move('./',$pic_name);
            $art->art_group = $rq->art_group;
            $art->user_id = $rq->user_id;
            $art->art_id = $rq->art_id;

            $res = $art->save();
            if ($res) {
                return $this->twistt();
            }else {
                echo "添加失败";
            }
        }else {
            echo "THE TWISTER CAN NOT EMPTY!!!";
        }

    }
    public function insert(Request $rq){

        return view('insert');
    }
    public function twistt(){
        $art = new Art;
        $art = Art::all();

        return view('test',compact('art'));
    }


    public function pingadd(Request $rq,$id){
        // $yz = $rq->all()['ping_content'];
        // $art_id = $id;
        //
        // $yz = trim($yz);
        // if (!empty($yz)) {
        //     // return $this->ping();
        //     $ping = new Ping;
        //     $art = new Art;
        //
        // [0=>[id=>1]]
        //     dd($arts);
        //     $ping->ping_content = $rq->ping_content;
        //     $ping->art_group = $arts['art_group'];
        //     $ping->user_id = $arts['user_id'];
        //     $ping->art_id = $art_id;
        //
        //     $res = $art->save();
        //     if ($res) {
        //         return $this->ping();
        //     }else {
        //         echo "添加失败";
        //     }
        //
        //
        // }else{
        //     echo "不能为空";
        // }

    }
    public function ping(){
        // $ping = new Ping;
        // $pings = Ping::all();
        // return view('ping',compact('pings'));
        return view('pingadd');
    }

}
