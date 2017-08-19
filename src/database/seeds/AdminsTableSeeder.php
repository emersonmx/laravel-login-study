<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Admin();
        $user->name = 'Admin';
        $user->email = 'admin@laravel-login-study.dev';
        $user->password = bcrypt('secret');
        $user->remember_token = str_random(10);
        $user->save();
    }
}
