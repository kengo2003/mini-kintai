<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamping extends Model
{
    use HasFactory;

    protected $fillable =[
        'stampped_at',
        'stamp_type',  
        'is_correction'
    ];

    //入室退室のみの処理
    public function stamp_type() {
        $count = Stamping::count();
        if($count%2==0){
            return 0; //0は入室
        }else {
            return 1;
        }
    }
}
