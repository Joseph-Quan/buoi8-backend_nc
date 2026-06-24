<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo admin account cố định
        User::firstOrCreate(
            ['email' => 'admin@phu-xuan-blog.test'],
            [
                'name'     => 'Admin Blog',
                'password' => bcrypt('password'),
            ]
        );

        // Tạo 9 user ngẫu nhiên
        User::factory()->count(9)->create();
    }
}
