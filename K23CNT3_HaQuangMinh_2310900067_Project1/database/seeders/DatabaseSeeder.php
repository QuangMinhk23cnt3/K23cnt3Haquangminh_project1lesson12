<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            HQM_QUAN_TRITableSeeder::class,
            HQM_LOAI_SAN_PHAMTableSeeder::class,
            HQM_SAN_PHAMTableSeeder::class,
            HQM_KHACH_HANGTableSeeder::class,
            HQM_HOA_DONTableSeeder::class,
            HQM_CT_HOA_DONTableSeeder::class,
        ]);
    }
}
