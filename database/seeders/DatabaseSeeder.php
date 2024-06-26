<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        


     $user = User::factory()->create([
        'name' => 'Joel'
      ]);
      
        Post::factory(5)->create([
            'user_id' => $user
        ]);

    }
}
