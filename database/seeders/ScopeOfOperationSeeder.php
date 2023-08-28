<?php

namespace Database\Seeders;

use App\Models\ScopeOfOperation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ScopeOfOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scopeOfOperations = [
            [
                'name' => 'National',
                'code' => 'NTL',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Regional',
                'code' => 'RGN',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Continental',
                'code' => 'CNT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($scopeOfOperations as $scopeOfOperation) {
            ScopeOfOperation::create($scopeOfOperation);
        }
    }
}
