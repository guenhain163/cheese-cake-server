<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['name', 'description', 'detail', 'image_url', 'status'];

    public function units()
    {
        return $this->hasMany(Unit::class, 'course_id');
    }

    public function course()
    {
        return $this->hasMany(Unit::class, 'course_id');
    }
}
