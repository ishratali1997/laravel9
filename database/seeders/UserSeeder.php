<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Ishrat Ali',
            'email' => 'ishratali574@gmail.com',
            'password' => bcrypt('12345678')
        ]);

    }
}
