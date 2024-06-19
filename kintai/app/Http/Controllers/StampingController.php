<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Stamping;

class StampingController extends Controller
{
    
    public function stamp(){
        return view('stamp');
    }

    public function savetime(){
        $timestamp = new Stamping;
        $dateTime = Carbon::now();
        $dateTime = Carbon::parse( $dateTime )->timezone('Asia/Tokyo');
        $timestamp->stampped_at = $dateTime;
        $timestamp->stamp_type = $timestamp->stamp_type();  //modelの関数を呼ぶ
        $timestamp->is_correction = false;
        $timestamp->save(); //保存

        return redirect("/stamp");
    }

}