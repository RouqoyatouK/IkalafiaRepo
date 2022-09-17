<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refuser extends Model
{
    use HasFactory;
    protected $fillable = [

        'nom',
        'email',
        'message',
     
     ];
}
