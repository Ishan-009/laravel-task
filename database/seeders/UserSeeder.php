<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = new User;

        $user->email = "admin@admin.com";
        $user->password = "password";
        $user->role = "admin";

        $user->save();

    }


}
