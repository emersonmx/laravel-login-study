<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email = 'admin@laravel-login-study.dev';
        $user->password = bcrypt('secret');
        $user->remember_token = str_random(10);
        $user->role = config('acl.roles.admin');
        $user->save();
    }
}
