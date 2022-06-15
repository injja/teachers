<?php

namespace App\Models\Reviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['rating', 'review', 'teacher_id', 'username'];
}
