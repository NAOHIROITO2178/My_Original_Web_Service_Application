<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snsuser extends Model
{
    use HasFactory;

    protected $table = "snsusers";
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
    ];
}
