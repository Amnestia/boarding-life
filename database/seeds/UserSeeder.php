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
    }
}
