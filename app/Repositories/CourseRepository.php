<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository extends BaseRepository
{

    public function model()
    {
        return Course::class;
    }

    public function getDetail($course, $type_lesons)
    {
        $data = $this->model;

        if ($type_lesons == "Kanji") {
            $data = $data->with(['units', 'units.kanji']);
        }

        return $data->find($course->id);
    }
}
