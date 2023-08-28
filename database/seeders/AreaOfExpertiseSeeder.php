<?php

namespace Database\Seeders;

use App\Models\AreaOfExpertise;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AreaOfExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category11 = Category::where('slug', 'agriculture')->first();
        $category12 = Category::where('slug', 'rural-development')->first();
        $category13 = Category::where('slug', 'blue-economy')->first();
        $category14 = Category::where('slug', 'sustainable-environment')->first();
        $subCategory11 = SubCategory::where('slug', 'agriculture-and-food-security')->first();
        $subCategory12 = SubCategory::where('slug', 'rural-development')->first();
        $subCategory13 = SubCategory::where('slug', 'sustainable-environment')->first();
        $subCategory14 = SubCategory::where('slug', 'climate-change-environment')->first();
        $subCategory15 = SubCategory::where('slug', 'water-and-natural-resources')->first();
        $subCategory16 = SubCategory::where('slug', 'desertification')->first();

        $category21 = Category::where('slug', 'economy-development')->first();
        $category22 = Category::where('slug', 'trade')->first();
        $category23 = Category::where('slug', 'industry')->first();
        $category24 = Category::where('slug', 'mining')->first();
        $subCategory21 = SubCategory::where('slug', 'trade')->first();
        $subCategory22 = SubCategory::where('slug', 'industry')->first();
        $subCategory23 = SubCategory::where('slug', 'handcrafts')->first();
        $subCategory24 = SubCategory::where('slug', 'customs-immigration')->first();
        $subCategory25 = SubCategory::where('slug', 'mining')->first();

        $category31 = Category::where('slug', 'education')->first();
        $category32 = Category::where('slug', 'science')->first();
        $category33 = Category::where('slug', 'technology')->first();
        $category34 = Category::where('slug', 'innovation')->first();
        $subCategory31 = SubCategory::where('slug', 'education')->first();
        $subCategory32 = SubCategory::where('slug', 'ict')->first();
        $subCategory33 = SubCategory::where('slug', 'human-capital')->first();
        $subCategory34 = SubCategory::where('slug', 'innovation')->first();
        $subCategory35 = SubCategory::where('slug', 'science-and-technology')->first();
        $subCategory36 = SubCategory::where('slug', 'space')->first();

        $areaOfExpertises = [
            [
                'category_id' => $category11->id,
                'sub_category_id' => $subCategory11->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category11->id,
                'sub_category_id' => $subCategory12->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category11->id,
                'sub_category_id' => $subCategory13->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category11->id,
                'sub_category_id' => $subCategory14->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category11->id,
                'sub_category_id' => $subCategory15->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category11->id,
                'sub_category_id' => $subCategory16->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category12->id,
                'sub_category_id' => $subCategory11->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category12->id,
                'sub_category_id' => $subCategory12->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category12->id,
                'sub_category_id' => $subCategory13->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category12->id,
                'sub_category_id' => $subCategory14->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category12->id,
                'sub_category_id' => $subCategory15->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category12->id,
                'sub_category_id' => $subCategory16->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category13->id,
                'sub_category_id' => $subCategory11->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category13->id,
                'sub_category_id' => $subCategory12->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category13->id,
                'sub_category_id' => $subCategory13->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category13->id,
                'sub_category_id' => $subCategory14->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category13->id,
                'sub_category_id' => $subCategory15->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category13->id,
                'sub_category_id' => $subCategory16->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category14->id,
                'sub_category_id' => $subCategory11->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category14->id,
                'sub_category_id' => $subCategory12->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category14->id,
                'sub_category_id' => $subCategory13->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category14->id,
                'sub_category_id' => $subCategory14->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category14->id,
                'sub_category_id' => $subCategory15->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category14->id,
                'sub_category_id' => $subCategory16->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category21->id,
                'sub_category_id' => $subCategory21->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category21->id,
                'sub_category_id' => $subCategory22->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category21->id,
                'sub_category_id' => $subCategory23->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category21->id,
                'sub_category_id' => $subCategory24->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category21->id,
                'sub_category_id' => $subCategory25->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category22->id,
                'sub_category_id' => $subCategory21->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category22->id,
                'sub_category_id' => $subCategory22->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category22->id,
                'sub_category_id' => $subCategory23->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category22->id,
                'sub_category_id' => $subCategory24->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category22->id,
                'sub_category_id' => $subCategory25->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category23->id,
                'sub_category_id' => $subCategory21->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category23->id,
                'sub_category_id' => $subCategory22->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category23->id,
                'sub_category_id' => $subCategory23->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category23->id,
                'sub_category_id' => $subCategory24->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category23->id,
                'sub_category_id' => $subCategory25->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category24->id,
                'sub_category_id' => $subCategory21->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category24->id,
                'sub_category_id' => $subCategory22->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category24->id,
                'sub_category_id' => $subCategory23->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category24->id,
                'sub_category_id' => $subCategory24->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category24->id,
                'sub_category_id' => $subCategory25->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category31->id,
                'sub_category_id' => $subCategory31->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category31->id,
                'sub_category_id' => $subCategory32->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category31->id,
                'sub_category_id' => $subCategory33->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category31->id,
                'sub_category_id' => $subCategory34->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category31->id,
                'sub_category_id' => $subCategory35->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category31->id,
                'sub_category_id' => $subCategory36->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category32->id,
                'sub_category_id' => $subCategory31->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category32->id,
                'sub_category_id' => $subCategory32->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category32->id,
                'sub_category_id' => $subCategory33->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category32->id,
                'sub_category_id' => $subCategory34->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category32->id,
                'sub_category_id' => $subCategory35->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category32->id,
                'sub_category_id' => $subCategory36->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category33->id,
                'sub_category_id' => $subCategory31->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category33->id,
                'sub_category_id' => $subCategory32->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category33->id,
                'sub_category_id' => $subCategory33->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category33->id,
                'sub_category_id' => $subCategory34->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category33->id,
                'sub_category_id' => $subCategory35->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category33->id,
                'sub_category_id' => $subCategory36->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'category_id' => $category34->id,
                'sub_category_id' => $subCategory31->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category34->id,
                'sub_category_id' => $subCategory32->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category34->id,
                'sub_category_id' => $subCategory33->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category34->id,
                'sub_category_id' => $subCategory34->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category34->id,
                'sub_category_id' => $subCategory35->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => $category34->id,
                'sub_category_id' => $subCategory36->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($areaOfExpertises as $areaOfExpertise) {
            AreaOfExpertise::create($areaOfExpertise);
        }
    }
}
