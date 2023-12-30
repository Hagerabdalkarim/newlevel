<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Car;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        // Car::factory(20)->create();
        
       Car::factory(10)->each(Category::factory()->count(3)->create(['id' =>'category_id']));
        //   Car::factory(10)->create();
        //   Category::factory(20)->create();
    }
}
