<?php

namespace App\Models\Teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reviews\Review;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email_adress', 'phone_number', 'experience', 'education', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeFilterByName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }

    public function scopeFilterBySubject($query, $subject_id)
    {
        return $query->where('subject_id', $subject_id);
    }
}
