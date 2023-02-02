<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications = [
            ['name'=>'MOAs','category_id'=>1],
            ['name'=>'Budgets ','category_id'=>1],
            ['name'=>'Solications ','category_id'=>1],
            ['name'=>'Requests ','category_id'=>1],
            ['name'=>'Plans ','category_id'=>2],
            ['name'=>'Actions ','category_id'=>2],
            ['name'=>'Curfew ','category_id'=>2],
            ['name'=>'Contrabands ','category_id'=>2],
            ['name'=>'Tourism ','category_id'=>3],
            ['name'=>'TRICAB ','category_id'=>4],
            ['name'=>'PUBs, PUJs','category_id'=>4],
            ['name'=>'TRUCKS','category_id'=>4],
            ['name'=>'MFRTA ','category_id'=>4],
            ['name'=>'Budgets ','category_id'=>5],
            ['name'=>'Cemetery ','category_id'=>5],
            ['name'=>'Banog-Banog Festival','category_id'=>5],
            ['name'=>'Children ','category_id'=>6],
            ['name'=>'Youth','category_id'=>6],
            ['name'=>'Women','category_id'=>6],
            ['name'=>'Donations','category_id'=>6],
            ['name'=>'PDAO','category_id'=>6],
            ['name'=>'Senior Citizen','category_id'=>6],
            ['name'=>'Livelihood','category_id'=>7],
            ['name'=>'NBSC','category_id'=>8],
            ['name'=>'MFNHS','category_id'=>8],
            ['name'=>'ALS','category_id'=>8],
            ['name'=>'TESDA','category_id'=>8],
            ['name'=>'Infrastructure','category_id'=>9],
            ['name'=>'Projects','category_id'=>9],
            ['name'=>'Roads and Bridges ','category_id'=>9],
            ['name'=>'Health ','category_id'=>10],
            ['name'=>'Nutrition','category_id'=>10],
            ['name'=>'NGOs','category_id'=>11],
            ['name'=>'CSOs','category_id'=>11],
            ['name'=>'Cooperative ','category_id'=>11],
            ['name'=>'Employees','category_id'=>12],
            ['name'=>'Plantilla','category_id'=>12],
            ['name'=>'Creation of Offices ','category_id'=>12],
            ['name'=>'Projects ','category_id'=>13],
            ['name'=>'Crops ','category_id'=>13],
            ['name'=>'Subdivisions ','category_id'=>14],
            ['name'=>'Development Permit ','category_id'=>14],
            ['name'=>'Land Use ','category_id'=>14],
            ['name'=>'MF Octagon Cockpit ','category_id'=>15],
            ['name'=>'Damilag Cockpit Association ','category_id'=>15],
            ['name'=>'Entertainment ','category_id'=>15],
            ['name'=>'Ancestral Domain ','category_id'=>16],
            ['name'=>'IPMRs ','category_id'=>16],
            ['name'=>'Ips Culture and Belief ','category_id'=>16],
            ['name'=>'BUSECO','category_id'=>17],
            ['name'=>'Water District','category_id'=>17],
            ['name'=>'Banks','category_id'=>17],
            ['name'=>'Market ','category_id'=>17],
            ['name'=>'Slaughterhouse ','category_id'=>17],            
        ];

        foreach($classifications as $classification){
            DB::table('classifications')->insert([
                'name' => $classification['name'],
                'category_id' => $classification['category_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
