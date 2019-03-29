<?php

use App\role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role= new role();

        $role->name='Admin';
        $role->slug='admin';
        $role->save();


        $rolefirst= new role();
        $rolefirst->name='Author';
        $rolefirst->slug='author';
        $rolefirst->save();

    }
}
