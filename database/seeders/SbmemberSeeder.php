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

            ['name'=>'HON. REYNALDO L. BAGAYAS, JR.','position'=>'Municipal Vice Mayor', 'code' => 'RLB, Jr.', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. MIGUEL D. DEMATA','position'=>'Sangguniang Bayan Member', 'code' => 'MDD', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. JAY S. ALBARECE','position'=>'Sangguniang Bayan Member', 'code' => 'JSA', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. RINA EDROTE QUIÑO','position'=>'Sangguniang Bayan Member', 'code' => 'REQ', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. ELZEVIR A. DAGUNLAY','position'=>'Sangguniang Bayan Member', 'code' => 'EAD', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. JOY LAVISORES CORDOVEZ','position'=>'Sangguniang Bayan Member', 'code' => 'JLC', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. CHRISTY LEPARTO SALABE','position'=>'Sangguniang Bayan Member', 'code' => 'CLS', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. RAQUEL ABALES. BAYACAG','position'=>'Sangguniang Bayan Member', 'code' => 'RAB', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. JUNIDINI J. ARTAJO','position'=>'Sangguniang Bayan Member', 'code' => 'JJA', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. ALEX D. PAYANGGA','position'=>'Sangguniang Bayan Member', 'code' => 'ADP', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. FLORAMAE D. PENASO','position'=>'Sangguniang Bayan Member', 'code' => 'FDP', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. JOHN ANTHONY G. LEYSON','position'=>'Sangguniang Bayan Member', 'code' => 'JAGL', 'status' => '1', 'political_year' => '2022'],
            ['name'=>'HON. RAUL S. MIÑOZA','position'=>'Sangguniang Bayan Member', 'code' => 'RSM', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. ELIEZER S. ONAHON','position'=>'Sangguniang Bayan Member', 'code' => 'ESO', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. WARLEO A. GOAYAN','position'=>'Sangguniang Bayan Member', 'code' => 'WAG', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. JUANITO I. QUIÑO','position'=>'Sangguniang Bayan Member', 'code' => 'JIQ', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. ALBERTO B. TINOY','position'=>'Sangguniang Bayan Member', 'code' => 'ABT', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. EVELIO E. CORDOVEZ','position'=>'Sangguniang Bayan Member', 'code' => 'EEC', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. NELSON S. BINAYAO','position'=>'Sangguniang Bayan Member', 'code' => 'NSB', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. VICTOR C. DUMOTAN','position'=>'Sangguniang Bayan Member', 'code' => 'VCD', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. JIMSON D. PAYANGGA','position'=>'Sangguniang Bayan Member', 'code' => 'JDP', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. MARIO B. ALBARECE, JR.','position'=>'Sangguniang Bayan Member', 'code' => 'MBA, Jr.', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. JERSON S. LEYSON','position'=>'Sangguniang Bayan Member', 'code' => 'JSL', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. RONULFO D. GANAS','position'=>'Sangguniang Bayan Member', 'code' => 'RDG', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. CONRADO M. BINAYAO','position'=>'Sangguniang Bayan Member', 'code' => 'CMB', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. BEN P. PANCRUDO','position'=>'Sangguniang Bayan Member', 'code' => 'BPP', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. GENEVIEVE Y. BALINTUAS','position'=>'Sangguniang Bayan Member', 'code' => 'GYB', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. VISMINDA Q. DUMOTAN','position'=>'Sangguniang Bayan Member', 'code' => 'VQD', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. LESTER REY L. ARAÑA','position'=>'Sangguniang Bayan Member', 'code' => 'LRLA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. JOHNNY C. ALBARECE','position'=>'Sangguniang Bayan Member', 'code' => 'JCA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. VICTORIO G. DAGUNLAY','position'=>'Sangguniang Bayan Member', 'code' => 'VGD', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. JULIAN A. TORRES','position'=>'Sangguniang Bayan Member', 'code' => 'JAT', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. DALPHON G. ONAHON','position'=>'Sangguniang Bayan Member', 'code' => 'DGO', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. HILARIO B. PAUSANOS, JR.','position'=>'Sangguniang Bayan Member', 'code' => 'HBP', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. LEONILO G. TILAP','position'=>'Sangguniang Bayan Member', 'code' => 'LGT', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. CLIVE D. QUIÑO','position'=>'Sangguniang Bayan Member', 'code' => 'CDQ', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. KARLO ENRICO A. ALOMBRO','position'=>'Sangguniang Bayan Member', 'code' => 'KEAA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. DIOSDADO N. DITONA','position'=>'Sangguniang Bayan Member', 'code' => 'DND', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. SALVADOR A. ALBARECE III','position'=>'Sangguniang Bayan Member', 'code' => 'SAA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. ALFREDO C. GUDEN','position'=>'Sangguniang Bayan Member', 'code' => 'ACG', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. MARCELA P. GALOPE','position'=>'Sangguniang Bayan Member', 'code' => 'MPG', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. AURORA A. MIGRIÑO','position'=>'Sangguniang Bayan Member', 'code' => 'AAM', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. FE Q. DONGALLO','position'=>'Sangguniang Bayan Member', 'code' => 'FQD', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. NICKARTER S. ONAHON','position'=>'Sangguniang Bayan Member', 'code' => 'NSO', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. TERESITO V. PLAMOR','position'=>'Sangguniang Bayan Member', 'code' => 'TVP', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. FRANCO G. MONSOD','position'=>'Sangguniang Bayan Member', 'code' => 'FGM', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. JULIANO C. LAVISORES','position'=>'Sangguniang Bayan Member', 'code' => 'JCL', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. VINCENT Y. QUINGA','position'=>'Sangguniang Bayan Member', 'code' => 'VYQ', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. SERGIO T. HISONA','position'=>'Sangguniang Bayan Member', 'code' => 'STH', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. ROLANDA D. AGUDA','position'=>'Sangguniang Bayan Member', 'code' => 'RDA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. RICARDO C. DOYDORA','position'=>'Sangguniang Bayan Member', 'code' => 'RCD', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. SOCORRO O. ACOSTA','position'=>'Sangguniang Bayan Member', 'code' => 'SOA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. TORIBIO BALAGULAN','position'=>'Sangguniang Bayan Member', 'code' => 'TB', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'HON. VICTOR EMMANUEL C. ALBARECE','position'=>'Sangguniang Bayan Member', 'code' => 'VECA', 'status' => '0', 'political_year' => '0000'],
            ['name'=>'NO PROPONENT','position'=>'None', 'code' => 'NP', 'status' => '0', 'political_year' => '0000'],
        ];

        foreach($sbmembers as $sbmember){
            DB::table('sbmembers')->insert([
                'name' => $sbmember['name'],
                'position' => $sbmember['position'],
                'code' => $sbmember['code'],
                'political_year' => $sbmember['political_year'],
                'status' => $sbmember['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
