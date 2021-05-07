<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    public $table = 'classes';
    public $fillable = [
        'teacher_name',
        'batch_name',
        'subject',
        'classroom_key',
        'status'
    ];
}
