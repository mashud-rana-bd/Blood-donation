<?php

use App\User;
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
        $user=new User();
        $user->role_id='1';
        $user->name='md.admin';
        $user->email='admin@gmail.com';
        $user->password=bcrypt('123456');
        $user->save();


        $usersecond=new User();
        $usersecond->role_id='2';
        $usersecond->name='md.author';
        $usersecond->email='author@gmail.com';
        $usersecond->password=bcrypt('654321');
        $usersecond->save();
    }
}
