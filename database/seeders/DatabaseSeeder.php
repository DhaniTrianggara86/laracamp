<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CampTableSeeder::class,
            CampBenefitTableSeeder::class,
            AdminUserSeeder::class,
        ]);
      
    }
}
