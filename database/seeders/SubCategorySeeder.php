<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [
            [
                'name' => ' Agriculture and Food Security',
                'slug' => Str::slug('Agriculture and Food Security', '-', ''),
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
                'name' => 'Sustainable Environment',
                'slug' => Str::slug('Sustainable Environment', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Climate Change Environment',
                'slug' => Str::slug('Climate Change, Environment', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Water and Natural Resources',
                'slug' => Str::slug('Water and Natural Resources', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Desertification',
                'slug' => Str::slug('Desertification', '-', ''),
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
                'name' => 'Handcrafts',
                'slug' => Str::slug('Handcrafts', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Customs Immigration',
                'slug' => Str::slug('Customs Immigration', '-', ''),
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
                'name' => 'ICT',
                'slug' => Str::slug('ICT', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Human Capital',
                'slug' => Str::slug('Human Capital', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Innovation',
                'slug' => Str::slug('Innovation', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Science and Technology',
                'slug' => Str::slug('Science and Technology', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Space',
                'slug' => Str::slug('Space', '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($subCategories as $subCategory) {
            SubCategory::create($subCategory);
        }
    }
}
