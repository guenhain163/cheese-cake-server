<?php

namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{

    public function model()
    {
        return User::class;
    }
}
