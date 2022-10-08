@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-lg-4 col-md-6 mx-4 mb-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="pill" data-bs-target="#pills-permission" type="button" role="tab" aria-controls="pills-permission" aria-selected="true">
                            <span class="ms-1">Vai trò</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="pill" data-bs-target="#pills-roles" type="button" role="tab" aria-controls="pills-roles" aria-selected="true">
                            <span class="ms-1">Phân quyền</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-permission" role="tabpanel" aria-labelledby="pills-permission-tab">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Tất cả Admin</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Thêm Admin</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Họ và tên
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Email
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                role
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Creation Date
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="ps-4">
                                                    <p class="text-xs font-weight-bold mb-0">{{$user->id}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex">
                                                        <img src="{{ $user->avatar_url ?? '../assets/img/team-2.jpg' }}" class="avatar avatar-sm me-3">
                                                        <p class="text-xs font-weight-bold mb-0">{{ $user->name }}</p>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex">
                                                        @foreach($user['roles'] as $role)
                                                            <span class="p-2 text-xs border rounded-2 d-flex align-items-center">{{ $role->description }}
                                                            <button class="btn border-0 p-0 ms-2 rounded-circle my-0">
                                                                <i class="fa-regular fa-circle-xmark"></i>
                                                            </button>
                                                        </span>
                                                        @endforeach
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                    </span>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-roles" role="tabpanel" aria-labelledby="pills-roles-tab">
                    <div class="tab-pane fade show active" id="pills-permission" role="tabpanel" aria-labelledby="pills-permission-tab">
                        <div class="card mb-4 mx-4">
                            <div class="card-header pb-0">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>
                                        <h5 class="mb-0">Tất cả Admin</h5>
                                    </div>
                                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Thêm Admin</a>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div>
                                    @foreach($roles as $role)
                                        <div class="card-header">
                                            {{ $role->description }}
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex">
                                                @foreach($role['permissions'] as $permission)
                                                    <span class="p-2 text-xs border rounded-2 d-flex align-items-center">{{ $permission->description }}
                                                            <button class="btn border-0 p-0 ms-2 rounded-circle my-0">
                                                                <i class="fa-regular fa-circle-xmark"></i>
                                                            </button>
                                                        </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
