<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id','email','password','created_at','updated_at'
    ];
}
