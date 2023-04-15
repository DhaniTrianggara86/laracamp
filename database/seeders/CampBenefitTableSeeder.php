<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $campBenefits = [
            [

        'camp_id'=>1,
        'name'=>'Pro Techstack Kit'

            ],
        [

            'camp_id'=>1,
            'name'=>'Pro Techstack Kit'
    
        ],
            [

                'camp_id'=>1,
                'name'=>'Pro Techstack Kit'
        
            ],
        
        ];
        
        CampBenefit::insert($campBenefits);
    }
}
