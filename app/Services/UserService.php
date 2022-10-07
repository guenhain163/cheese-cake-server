<?php


namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends BaseService
{
    protected $userRepository;

    public function __construct(
        UserRepository                     $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->userRepository->all();
    }
}
