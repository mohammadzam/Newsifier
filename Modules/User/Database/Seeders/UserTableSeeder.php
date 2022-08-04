<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'M-Zam',
                'phone' => '0910000000',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Kamal',
                'phone' => '0920000000',
                'password' => Hash::make('password'),
            ],
        ];
        foreach ($users as $user){
            User::create($user);
        }
    }
}
