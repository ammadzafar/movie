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
        \App\Model\User::create([
            'name' => 'admin',
            'role_id' => \App\Model\Role::where('name','admin')->first()->id,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        \App\Model\User::create([
            'name' => 'client',
            'role_id' => \App\Model\Role::where('name','client')->first()->id,
            'email' => 'client@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
