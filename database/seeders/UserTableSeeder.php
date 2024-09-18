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
            'first_name'      => 'Kunozga',
            'last_name'      => 'Mlowoka',
            'email'     =>  'kunozgamlowoka@gmail.com',
            'phone_number'     =>  '+265997748584',
            'password'  =>  bcrypt('12345678')
        ]);
        $user->roles()->attach($role);

        $user = User::create([
            'first_name'      => 'Timothy',
            'last_name'      => 'Lwesya',
            'email'     =>  'tikiilwe@gmail.com',
            'phone_number'     =>  '+265884015078',
            'password'  =>  bcrypt('12345678')
        ]);
        $user->roles()->attach($role);
    }
}
