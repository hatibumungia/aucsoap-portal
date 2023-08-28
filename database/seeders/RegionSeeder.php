<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'North',
                'code' => 'NT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'South',
                'code' => 'ST',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'West',
                'code' => 'WS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'East',
                'code' => 'ES',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Central',
                'code' => 'CT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Diaspora',
                'code' => 'DS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($users as $user) {
            Region::create($user);
        }
    }
}
