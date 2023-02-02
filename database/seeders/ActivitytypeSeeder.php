<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitytypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activittypes = [
            ['name'=>'Committee Hearing'],
            ['name'=>'Public Hearing'],
        ];

        foreach($activittypes as $activittype){
            DB::table('activitytypes')->insert([
                'name' => $activittype['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
