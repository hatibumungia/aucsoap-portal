<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(OfficialLanguageSeeder::class);
        $this->call(CsoClassificationSeeder::class);
        $this->call(ScopeOfOperationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(AreaOfExpertiseSeeder::class);
//        $this->call(AuOrganisationSeeder::class);
        $this->call(TypeOfApplicationSeeder::class);
//        $this->call(CurrencySeeder::class);
//        $this->call(GrantedStatusTypeSeeder::class);
        $this->call(ApplicationStatusSeed::class);
        $this->call(UserSeeder::class);
    }
}
