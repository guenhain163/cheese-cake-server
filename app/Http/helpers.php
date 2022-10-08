<?php

use App\Register;
use App\Shift;
use App\ShiftSession;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage as Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Jenssegers\Agent\Agent as Agent;
use RobbieP\CloudConvertLaravel\Facades\CloudConvert as CloudConvert;
use Vimeo\Laravel\Facades\Vimeo;

function parseJwt($jwt = ''){
    return json_decode(
        base64_decode(
            str_replace('_', '/', str_replace('-', '+', explode('.', $jwt)[1]))
        )
    );
}

