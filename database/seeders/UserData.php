<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'id_pegawai' => 'C030322063',
                'username' => 'Admin',
                'password' => bcrypt('123456'),
                'level' => '1',
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
