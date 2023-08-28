<?php

namespace Database\Seeders;

use App\Models\ApplicationStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ApplicationStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicationStatuses = [
            [
                'name' => 'Approved',
                'slug' => Str::slug('Approved', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Differed',
                'slug' => Str::slug('Differed', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Denied',
                'slug' => Str::slug('Denied', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Cancelled',
                'slug' => Str::slug('Cancelled', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Received',
                'slug' => Str::slug('Received', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Submitted',
                'slug' => Str::slug('Submitted', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Review on Progress',
                'slug' => Str::slug('waiting', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($applicationStatuses as $applicationStatus) {
            ApplicationStatus::create($applicationStatus);
        }
    }
}
