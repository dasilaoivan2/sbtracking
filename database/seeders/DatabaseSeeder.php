<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Incomingdocument;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            EmployeeSeeder::class,
            ReferraltypeSeeder::class,
            ReferralSeeder::class,
            ActivitytypeSeeder::class,
            LegislationtypeSeeder::class,
            LegislationSeeder::class,
            IncomingdocumentSeeder::class,
            SbmemberSeeder::class,
            CommitteeSeeder::class,
            ClassificationSeeder::class,
            OrdercategorySeeder::class,
            TypeSeeder::class,
        ]);
    }
}
