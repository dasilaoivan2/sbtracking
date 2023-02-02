<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            ['lastname'=>'Jimenez', 'firstname'=>'Junel Jig','middlename'=>'Garcia','ext'=>"",'position'=>'OIC-MISO','cellphone'=>'09055740562'],
        ];

        foreach($employees as $employee){
            DB::table('employees')->insert([
                'lastname' => $employee['lastname'],
                'firstname' => $employee['firstname'],
                'middlename' => $employee['middlename'],
                'ext' => $employee['ext'],
                'position' => $employee['position'],
                'cellphone' => $employee['cellphone'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
