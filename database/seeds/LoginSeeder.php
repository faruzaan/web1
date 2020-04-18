<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->user_name = 'Admin';
        $user->email = 'Admin';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
