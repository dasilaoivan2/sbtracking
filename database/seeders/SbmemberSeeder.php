<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SbmemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sbmembers = [

            ['name'=>'HON. REYNALDO L. BAGAYAS, JR.','position'=>'Municipal Vice Mayor'],
            ['name'=>'HON. MIGUEL D. DEMATA','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. JAY S. ALBARECE','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. RINA EDROTE QUIÑO','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. ELZEVIR A. DAGUNLAY','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. JOY LAVISORES CORDOVEZ','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. CHRISTY LEPARTO SALABE','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. RAQUEL ABALES. BAYACAG','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. JUNIDINI J. ARTAJO','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. ALEX D. PAYANGGA','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. FLORAMAE D. PENASO','position'=>'Sangguniang Bayan Member'],
            ['name'=>'HON. JOHN ANTHONY G. LEYSON','position'=>'Sangguniang Bayan Member'],
        ];

        foreach($sbmembers as $sbmember){
            DB::table('sbmembers')->insert([
                'name' => $sbmember['name'],
                'position' => $sbmember['position'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
