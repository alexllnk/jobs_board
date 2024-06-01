<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Offer;
use App\Models\Tag;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->has(Company::factory())->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Offer::factory(20)->has(Tag::factory()->count(3))->create();

        Offer::factory(20)
            ->notFeatured()
            ->has(Tag::factory()->count(3))
            ->create();
    }
}
