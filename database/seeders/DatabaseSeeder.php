<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        User::create([
            'name' => 'Rizky Nur',
            'username' => 'rizkynur',
            'email' => 'rizky@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_admin' => 1,
        ]);

        Category::create([
            'name' => 'Informasi',
            'slug' => 'informasi'
        ]);
        Category::create([
            'name' => 'Acara',
            'slug' => 'acara'
        ]);
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita',
        ]);
        Post::factory(20)->create();
    }
}
