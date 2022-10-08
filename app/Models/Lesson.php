<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = ['name', 'description', 'unit_id', 'type_lesson', 'model_id', 'order', 'course_id'];

    public function kanji()
    {
        return $this->hasOne(Kanji::class, 'id', 'model_id');
    }
}
