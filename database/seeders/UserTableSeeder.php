<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where("name", "administrator")->first();

        $user = User::create([
            'name'      => 'Kunozga Mlowoka',
            'email'     =>  'kunozgamlowoka@gmail.com',
            'password'  =>  bcrypt('12345678')
        ]);
        $user->roles()->attach($role);

        $user = User::create([
            'name'      => 'Timothy Lwesya',
            'email'     =>  'tikiilwe@gmail.com',
            'password'  =>  bcrypt('12345678')
        ]);
        $user->roles()->attach($role);
    }
}
