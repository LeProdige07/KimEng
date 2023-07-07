<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class LogetteInfo extends Model
{
    use HasFactory;

    public $fillable = ['nom', 'postnom', 'prenom', 'email', 'tel', 'fonction', 'commune', 'rue', 'quartier'];
}
