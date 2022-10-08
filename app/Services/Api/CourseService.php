<?php

namespace App\Services\Api;

use App\Repositories\CourseRepository;
use App\Services\BaseService;

class CourseService extends BaseService
{
    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function getDetail($course, $type_lesons) {
        return $this->courseRepository->getDetail($course, $type_lesons);
    }
}
