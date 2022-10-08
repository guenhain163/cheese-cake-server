<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }

    public function permission() {
        $users = $this->userService->getUserWithPermission();

        $roles = Role::with('permissions')->get();

        return view('laravel-examples/user-permission', [
            'roles' => $roles,
            'users' => $users
        ]);
    }
}
