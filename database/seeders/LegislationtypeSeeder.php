<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegislationtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $legislationtypes = [
            ['name'=>'Resolution'],
            ['name'=>'Ordinance'],
        ];

        foreach($legislationtypes as $legislationtype){
            DB::table('legislationtypes')->insert([
                'name' => $legislationtype['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
