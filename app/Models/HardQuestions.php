<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardQuestions extends Model
{
    use HasFactory;

    protected $fillable = [
        'hardquestion',
        'hardanswer'
    ];
}
