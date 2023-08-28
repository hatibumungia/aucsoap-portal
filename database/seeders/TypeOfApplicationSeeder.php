<?php

namespace Database\Seeders;

use App\Models\TypeOfApplication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class TypeOfApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfApplications = [
            [
                'name' => 'Consultative Status',
                'slug' => Str::slug('Consultative Status', '-', ''),
                'code' =>'CS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'National Chapter',
                'slug' => Str::slug('National Chapter', '-', ''),
                'code' => 'NC',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($typeOfApplications as $typeOfApplication) {
            TypeOfApplication::create($typeOfApplication);
        }
    }
}
