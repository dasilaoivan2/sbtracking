<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            ['name'=>'Barangay Affairs'],
            ['name'=>'Peace and Order'], 
            ['name'=>'Environment'],
            ['name'=>'Traffic and Transportation'], 
            ['name'=>'Administrative Services'], 
            ['name'=>'Social Services'],
            ['name'=>'Economic Services'], 
            ['name'=>'Education'], 
            ['name'=>'Public Works and Engineering'], 
            ['name'=>'Health and Nutrition'], 
            ['name'=>'Trade, Commerce and Industry'],
            ['name'=>'Good Governance and Civil Service'],
            ['name'=>'Agriculture'], 
            ['name'=>'Housing and Land Use'], 
            ['name'=>'Games and Amusement'], 
            ['name'=>'Indigenous People'], 
            ['name'=>'Public Utilities'], 
            ['name'=>'Children, Women and Family'], 
            ['name'=>'Employment'], 
            ['name'=>'Livelihood'], 
            ['name'=>'Sports'], 
            ['name'=>'Tourism'], 
        ];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //
    }
}
