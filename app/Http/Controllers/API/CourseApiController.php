<?php

namespace App\Http\Controllers\API;

use App\Models\Course;
use App\Services\Api\CourseService;
use Illuminate\Http\Request;

class CourseApiController extends ApiController
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        parent::__construct();
        $this->courseService = $courseService;
    }

    public function getDetail(Course $course)
    {
        return $this->successResponse($this->courseService->getDetail($course));
    }
}
