<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logette extends Model
{
    use HasFactory;

    public function color($key){
        if($key%2 == 0){
            return 'promo-video section-sm';
        }else {
            return 'about-2 section';
        }
    }
}
