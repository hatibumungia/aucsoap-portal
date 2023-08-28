<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\OfficialLanguage;
use App\Models\OrganisationAccount;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class OfficialLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $officialLanguages = [
            [
                'name' => 'Arabic',
                'slug' => Str::slug('Arabic', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'English',
                'slug' => Str::slug('English', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'French',
                'slug' => Str::slug('French', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Portuguese',
                'slug' => Str::slug('Portuguese', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Spanish',
                'slug' => Str::slug('Spanish', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Kiswahili',
                'slug' => Str::slug('Kiswahili', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($officialLanguages as $officialLanguage) {
            OfficialLanguage::create($officialLanguage);
        }
    }
}
