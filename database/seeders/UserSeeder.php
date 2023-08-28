<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\OfficialLanguage;
use App\Models\OrganisationAccount;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator Account',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('Secret@2022'),
                'is_email_verified' => true,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Civil Society Organisation',
                'email' => 'cso@gmail.com',
                'password' => bcrypt('Secret@2022'),
                'is_email_verified' => true,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Accreditation Officer',
                'email' => 'aofficer@gmail.com',
                'password' => bcrypt('Secret@2022'),
                'is_email_verified' => true,
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Head of Programs',
                'email' => 'hop@gmail.com',
                'password' => bcrypt('Secret@2022'),
                'is_email_verified' => true,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'African Union Organs',
                'email' => 'auorgans@gmail.com',
                'password' => bcrypt('Secret@2022'),
                'is_email_verified' => true,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $administrator = User::where('email', 'admin@gmail.com')->first();
        $civilSocietyOrganisation = User::where('email', 'cso@gmail.com')->first();
        $accreditationOfficer = User::where('email', 'aofficer@gmail.com')->first();
        $headOfProgram = User::where('email', 'hop@gmail.com')->first();
        $africanUnionOrgan = User::where('email', 'auorgans@gmail.com')->first();
        $language = OfficialLanguage::where('name', 'english')->first();
        $country = Country::where('code', 'TZ')->first();

        $organisationAccounts = [
            [
                'website' => 'www.mapera-leo.co.tz',
                'mobile_number' => 255478963214,
                'country_id' => $country->id,
                'user_id' => $administrator->id,
                'official_language_id' => $language->id,
                'slug' => Str::slug($administrator->name, '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'website' => 'www.makutupora-mapema.co.tz',
                'mobile_number' => 255789456258,
                'country_id' => $country->id,
                'user_id' => $civilSocietyOrganisation->id,
                'official_language_id' => $language->id,
                'slug' => Str::slug($civilSocietyOrganisation->name, '-', ''),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

//        foreach ($organisationAccounts as $organisationAccount) {
//            OrganisationAccount::create($organisationAccount);
//        }
//
//        $adminRole = Role::where('slug', 'ADMINISTRATOR')->with('permissions')->first();
//        $civilSocietyOrganisationRole = Role::where('slug', 'CIVIL_SOCIETY_ORGANISATION')->with('permissions')->first();
//        $accreditationOfficerRole = Role::where('slug', 'ACCREDITATION_OFFICER')->with('permissions')->first();
//        $headOfProgramRole = Role::where('slug', 'HEAD_OF_PROGRAMS')->with('permissions')->first();
//        $africanUnionOrganRole = Role::where('slug', 'AFRICAN_UNION_ORGANS')->with('permissions')->first();
//
//        $administrator->roles()->attach($adminRole);
//        $administrator->permissions()->attach($adminRole->permissions);
//
//        $civilSocietyOrganisation->roles()->attach($civilSocietyOrganisationRole);
//        $civilSocietyOrganisation->permissions()->attach($civilSocietyOrganisationRole->permissions);
//
//        $accreditationOfficer->roles()->attach($accreditationOfficerRole);
//        $accreditationOfficer->permissions()->attach($accreditationOfficerRole->permissions);
//
//        $headOfProgram->roles()->attach($headOfProgramRole);
//        $headOfProgram->permissions()->attach($headOfProgramRole->permissions);
//
//        $africanUnionOrgan->roles()->attach($africanUnionOrganRole);
//        $africanUnionOrgan->permissions()->attach($africanUnionOrganRole->permissions);
    }
}
