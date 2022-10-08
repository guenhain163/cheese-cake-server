<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    protected $user;
    protected $data = [];
    public function __construct()
    {
        $this->statusCode = 200;
        $this->middleware(function ($request, $next) {
            $this->user = null;

            if (!empty(!auth()->guest())) {
                $this->user = auth()->user();
            }

            if ($this->user == null && !empty(!auth('api')->guest())) {
                $this->user = auth('api')->user();
            }

            return $next($request);
        });
    }

    public function successResponse($data, $message = '')
    {
        return $this->apiResponse(200, $data, $message);
    }

    public function errorResponse($data, $message, $code = 0, $error = [])
    {
        return $this->apiResponse($code, $data, $message, $error);
    }

    protected function apiResponse($code, $data, $message, $error = [])
    {
        return \response()->json([
            'result'       => $code,
            'current_time' => time(),
            'message'      => $message,
            'data'         => !empty($data) ? $data : new \stdClass(),
            'error'        => !empty($error) ? $error : new \stdClass()
        ]);
    }
}
