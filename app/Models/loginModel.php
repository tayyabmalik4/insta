<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    use HasFactory;
    public $table = "login";
    public $timestamps= false;
}
