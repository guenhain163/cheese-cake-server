<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            [
                "name" => "create_comment",
                "description" => "Tạo bình luận",
                "type" => "system",

            ],

        ];

        $roles = [
            [
                "name" => "super_admin",
                "description" => "Super Admin",
                "type" => "system",
                "order" => 100,
                "permissions" => []
            ],
            [
                "name" => "guest",
                "description" => "Guest",
                "type" => "system",
                "order" => -5,
                "permissions" => []
            ],
        ];

        foreach ($permissions as $permission) {
            $modelPermission = Permission::updateOrCreate(["name" => $permission["name"]], $permission);
        }

        foreach ($roles as $role) {
            $modelRole = Role::where("name", $role["name"])->first();
            if (empty($modelRole)) {
                $modelRole = Role::create(
                    [
                        "name" => $role["name"],
                        "description" => $role["description"],
                        "type" => $role["type"],
                        "order" => $role["order"],
                    ]
                );
                $modelRole->givePermissionTo($role["permissions"]);

            } else {
                $modelRole->update(
                    [
                        "name" => $role["name"],
                        "description" => $role["description"],
                        "type" => $role["type"],
                        "order" => $role["order"],
                    ]
                );
            }


            if ($modelRole["name"] == "super_admin") {
                $modelRole->givePermissionTo(Permission::all());
            }
        }

    }
}
