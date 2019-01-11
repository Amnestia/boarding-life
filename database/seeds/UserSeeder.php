<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new \App\User();
        $u->name='admin';
        $u->email='a@a.a';
        $u->password=bcrypt('admin');
        $u->save();
        $u = new \App\User();
        $u->name='dummy';
        $u->email='d@d.d';
        $u->password=bcrypt('dummy');
        $u->save();
    }
}
