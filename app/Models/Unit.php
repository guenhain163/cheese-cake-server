<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = ['name', 'image_url', 'description', 'order', 'course_id'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'unit_id');
    }

    public function kanji()
    {
        return $this->hasMany(Lesson::class, 'unit_id')->where('type_lesson', '=', 'Kanji');
    }
}
