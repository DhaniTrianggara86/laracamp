<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $camps=  [
            [
            'title'=> 'Belajar Laravel',
            'slug'=> 'Belajar Laravel',
            'price'=> 200,
           'created_at'=> date('Y-m-d H:i:s',time()),
            'updated_at'=> date('Y-m-d H:i:s',time()),
        ],
    [
        'title'=> 'Belajar Laravel',
        'slug'=> 'Belajar Laravel',
        'price'=> 200,
       'created_at'=> date('Y-m-d H:i:s',time()),
        'updated_at'=> date('Y-m-d H:i:s',time()),
    ],
    ];

//    foreach ($camps as $key => $camp){
  //  Camp::create($camp);
  Camp::insert($camps);
}

    }
