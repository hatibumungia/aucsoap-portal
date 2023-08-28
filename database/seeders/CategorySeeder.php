<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Agriculture',
                'slug' => Str::slug('Agriculture', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Rural Development',
                'slug' => Str::slug('Rural Development', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Blue Economy',
                'slug' => Str::slug('Blue Economy', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sustainable Environment',
                'slug' => Str::slug('Sustainable Environment', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Economy Development',
                'slug' => Str::slug('Economy Development', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Trade',
                'slug' => Str::slug('Trade', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Industry',
                'slug' => Str::slug('Industry', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mining',
                'slug' => Str::slug('Mining', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Education',
                'slug' => Str::slug('Education', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => ' Science',
                'slug' => Str::slug('Science', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Technology',
                'slug' => Str::slug('Technology', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Innovation',
                'slug' => Str::slug('Innovation', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
