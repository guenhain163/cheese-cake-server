<?php


namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Spatie\Permission\Models\Role;

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
        return $this->userRepository->model->all();
    }

    public function getUserWithPermission()
    {
        return $this->userRepository->model->with(['roles'])->where('role', '>', 0)->get();
    }

    public function store($user, $id) {
        return $this->userRepository->model->where('id', '=', $id)->update($user);
    }
}
