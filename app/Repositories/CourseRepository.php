<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository extends BaseRepository
{

    public function model()
    {
        return Course::class;
    }

    public function getDetail($course)
    {
        return $this->model->with(['units', 'units.kanji'])->find($course->id);
//        return $this->model->with([
//            'units',
//            'units.lessons.kanji'
//        ])->find($course->id);
    }
}
