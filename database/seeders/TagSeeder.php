<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = ['Laravel', 'PHP', 'Backend', 'API', 'Tutorial', 'Vue.js', 'MySQL', 'DevOps'];
        foreach ($tags as $name) {
            Tag::firstOrCreate(['slug' => Str::slug($name)], ['name' => $name]);
        }
        // Pivot được gán trong PostSeeder sau khi Posts đã tồn tại
    }
}
