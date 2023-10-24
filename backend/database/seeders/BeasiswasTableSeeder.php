<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeasiswasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('beasiswas')->delete();
        
        \DB::table('beasiswas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'beasiswa PMII',
                'description' => 'beasiswa 50% untuk kader PMII',
                'img' => 'pengurus_Rifqi_1697618146.JPG',
                'link' => 'https://www.youtube.com/watch?v=nDcyoeJ8G1M',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'beasiswa NU',
                'description' => 'beasiswa 70% potongan UKT untuk warga nahdlyin',
                'img' => 'pengurus_Rifqi_1697618146.JPG',
                'link' => 'https://www.youtube.com/watch?v=nDcyoeJ8G1M',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}