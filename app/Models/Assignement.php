<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignement extends Model
{
    use HasFactory;
    public $fillable = [
        'classes_id',
        'topic',
        'description',
        'submission_date',
        'submission_time',
        'max_marks',
        'file'
    ];
}
