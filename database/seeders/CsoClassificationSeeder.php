<?php

namespace Database\Seeders;

use App\Models\CsoClassification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CsoClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csoClassifications = [
            [
                'name' => 'Social Group',
                'code' => 'SCG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Professional Group',
                'code' => 'PFG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Non-Governmental Organization',
                'code' => 'NGO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'CBO',
                'code' => 'CBO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Voluntary Organization',
                'code' => 'VLO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Cultural Organization',
                'code' => 'CLO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Social Organization',
                'code' => 'SCO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Professional Organization',
                'code' => 'PRO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($csoClassifications as $csoClassification) {
            CsoClassification::create($csoClassification);
        }
    }
}
