<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class GuestAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()->updateOrCreate([
            "username" => "guest", "email" => "guest@system"
        ], [
            "name" => "Guest",
//            "password" => "f5eD9vyV2VQ7ZBq3EQHGKhbsBprt5M2zZHcMjXqTfqrL3jU3chaWq6t94NV3mEaCYMrz53pA",
            "password" => password_hash('aGFja2Zlc3Q=', PASSWORD_BCRYPT),
            "google_id" => 0,
            "role" => -1
        ]);

        $user->assignRole("guest");

    }
}
