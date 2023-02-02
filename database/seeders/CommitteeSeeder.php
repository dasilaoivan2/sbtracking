<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $committees = [
            ['name'=>'COMMITTEE ON DISASTER RESILIENCE'],
            ['name'=>'COMMITTEE ON EDUCATION'],
            ['name'=>'COMMITTEE ON SENIOR CITIZENS AND PWD'],
            ['name'=>'COMMITTEE ON LAWS, RULES AND REGULATIONS'],
            ['name'=>'COMMITTEE ON LABOR AND EMPLOYMENT'],
            ['name'=>'COMMITTEE ON PEACE AND ORDER'],
            ['name'=>'COMMITTEE ON TOURISM AND DEVELOPMENT'],
            ['name'=>'COMMITTEE ON ENVIRONMENTAL PROTECTION'],
            ['name'=>'COMMITTEE ON FINANCE, BUDGET AND APPROPRIATIONS'],
            ['name'=>'COMMITTEE ON PUBLIC UTILITIES(TRANSPORTATION, COMMUNICATION, WATER AND POWER)'],
            ['name'=>'COMMITTEE ON GAMES AND AMUSEMENT'],
            ['name'=>'COMMITTEE ON FARMERS'],
            ['name'=>'COMMITTEE ON HEALTH AND SANITATION/ NUTRITION'],
            ['name'=>'COMMITTEE ON WOMAN, CHILDREN AND CHILD CARE'],
            ['name'=>'COMMITTEE ON CIVIL SERVICE AND GOOD GOVERNANCE'],
            ['name'=>'COMMITTEE ON TRADE, COMMERCE AND COOPERATIVE'],
            ['name'=>'COMMITTEE ON WAYS AND MEANS'],
            ['name'=>'COMMITTEE ON AGRICULTURE AND AGRARIAN REFORM'],
            ['name'=>'COMMITTEE ON ECONOMIC ENTERPRISE'],
            ['name'=>'COMMITTEE ON PUBLIC WORKS AND ENGINEERING'],
            ['name'=>'COMMITTEE ON HOUSING AND LAND USE'],
            ['name'=>'COMMTTEE ON BARANGAY AFFAIRS'],
            ['name'=>'COMMITTEE ON INDIGENOUS AND CULTURAL AFFAIRS'],
            ['name'=>'COMMITTEE ON YOUTH DEVELOPMENT AND SPORTS'],            
            ['name'=>'COMMITTEE OF THE WHOLE'],            
        ];

        foreach($committees as $committee){
            DB::table('committees')->insert([
                'name' => $committee['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
