<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function color($key){
        if($key%2 == 0){
            return 'color-bg';
        }else {
            return '';
        }
    }
}
