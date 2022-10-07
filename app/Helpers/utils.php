<?php

use Carbon\Carbon;

function responseError($code, $message, $errors = [])
{
    $output = [
        'message' => $message,
        'errors' => $errors
    ];
    return response()->json($output, $code);
}

function responseOK($data = null)
{
    return response()->json($data, 200);
}

function responseCreated($data = null)
{
    return response()->json(($data ?? []), 201);
}

function responseUpdatedOrDeleted()
{
    return response(null, 204);
}

function responseBadRequest($message)
{
    return response()->json(['message' => $message], 400);
}

function responseValidate($errors, $message = 'The given data was invalid.')
{
    $output = [
        'message' => $message,
        'errors' => $errors
    ];
    return response()->json($output, 422);
}

function responseInfoNotMatch($message)
{
    return response()->json(['message' => $message], 404);
}

function responseUnauthorized($message)
{
    return response()->json(['message' => $message], 401);
}

function getBrowserName($user_agent)
{
    $t = strtolower($user_agent);
    $t = " " . $t;
    if (strpos($t, 'opera') || strpos($t, 'opr/')) {
        return 'Opera';
    } elseif (strpos($t, 'edge')) {
        return 'Edge';
    } elseif (strpos($t, 'chrome')) {
        return 'Chrome';
    } elseif (strpos($t, 'safari')) {
        return 'Safari';
    } elseif (strpos($t, 'firefox')) {
        return 'Firefox';
    } elseif (strpos($t, 'msie') || strpos($t, 'trident/7')) {
        return 'Internet Explorer';
    } else {
        return 'Unkown';
    }
}
