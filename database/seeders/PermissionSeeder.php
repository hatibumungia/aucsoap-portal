<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Utils\HasPermissionsTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    use HasPermissionsTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'slug' => 'ADMINISTRATOR',
                'name' => Str::upper(Str::replace('_', ' ','ADMINISTRATOR'))
            ],
            [
                'slug' => 'CIVIL_SOCIETY_ORGANISATION',
                'name' => Str::upper(Str::replace('_', ' ','CIVIL_SOCIETY_ORGANISATION'))
            ],
            [
                'slug' => 'ACCREDITATION_OFFICER',
                'name' => Str::upper(Str::replace('_', ' ','ACCREDITATION_OFFICER'))
            ],
            [
                'slug' => 'HEAD_OF_PROGRAMS',
                'name' => Str::upper(Str::replace('_', ' ','HEAD_OF_PROGRAMS'))
            ],
            [
                'slug' => 'AFRICAN_UNION_ORGANS',
                'name' => Str::upper(Str::replace('_', ' ','AFRICAN_UNION_ORGANS'))
            ]
        ];
        $permissions = [
            [
                'slug' => 'VIEW_REGION_COUNTRIES',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_REGION_COUNTRIES'))
            ],
            [
                'slug' => 'VIEW_COUNTRIES',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_COUNTRIES'))
            ],
            [
                'slug' => 'VIEW_OFFICIAL_LANGUAGE',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_OFFICIAL_LANGUAGE'))
            ],
            [
                'slug' => 'VIEW_ORGANISATION_TYPE',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ORGANISATION_TYPE'))
            ],
            [
                'slug' => 'VIEW_SCOPE_OF_OPERATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_SCOPE_OF_OPERATION'))
            ],
            [
                'slug' => 'VIEW_AREAS_OF_EXPERTISE',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_AREAS_OF_EXPERTISE'))
            ],
            [
                'slug' => 'VIEW_AU_ORGANISATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_AU_ORGANISATION'))
            ],
            [
                'slug' => 'VIEW_TYPE_OF_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_TYPE_OF_APPLICATION'))
            ],
            [
                'slug' => 'VIEW_CURRENCY',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_CURRENCY'))
            ],
            [
                'slug' => 'VIEW_GRANTED_STATUS_TYPE',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_GRANTED_STATUS_TYPE'))
            ],
            [
                'slug' => 'SHOW_ORGANISATION_PROFILE',
                'name' => Str::upper(Str::replace('_', ' ','SHOW_ORGANISATION_PROFILE'))
            ],
            [
                'slug' => 'VIEW_ORGANISATION_INFORMATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ORGANISATION_INFORMATION'))
            ],
            [
                'slug' => 'CREATE_ORGANISATION_INFORMATION',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_ORGANISATION_INFORMATION'))
            ],
            [
                'slug' => 'VIEW_ADDITIONAL_INFORMATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ADDITIONAL_INFORMATION'))
            ],
            [
                'slug' => 'CREATE_ADDITIONAL_INFORMATION',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_ADDITIONAL_INFORMATION'))
            ],
            [
                'slug' => 'VIEW_CONTACT_PERSON',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_CONTACT_PERSON'))
            ],
            [
                'slug' => 'CREATE_CONTACT_PERSON',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_CONTACT_PERSON'))
            ],
            [
                'slug' => 'CREATE_CONSULTATIVE_STATUS',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_CONSULTATIVE_STATUS'))
            ],
            [
                'slug' => 'CREATE_NATIONAL_CHAPTER',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_NATIONAL_CHAPTER'))
            ],
            [
                'slug' => 'CREATE_OBSERVER_STATUS',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_OBSERVER_STATUS'))
            ],
            [
                'slug' => 'VIEW_ACCREDITATION_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ACCREDITATION_APPLICATION'))
            ],
            [
                'slug' => 'CREATE_ACCREDITATION_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_ACCREDITATION_APPLICATION'))
            ],
            [
                'slug' => 'SHOW_ACCREDITATION_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','SHOW_ACCREDITATION_APPLICATION'))
            ],
            [
                'slug' => 'REVIEW_ACCREDITATION_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','REVIEW_ACCREDITATION_APPLICATION'))
            ],
            [
                'slug' => 'APPROVE_ACCREDITATION_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','APPROVE_ACCREDITATION_APPLICATION'))
            ],
            [
                'slug' => 'VIEW_ATTACHMENT_ACCREDITATION_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ATTACHMENT_ACCREDITATION_APPLICATION'))
            ],
            [
                'slug' => 'VIEW_ACCREDITATION_APPLICATION_REPORT',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ACCREDITATION_APPLICATION_REPORT'))
            ],
            [
                'slug' => 'VIEW_ACCREDITATION_APPLICATION_NUMBER',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ACCREDITATION_APPLICATION_NUMBER'))
            ],
            [
                'slug' => 'SHOW_ACCREDITATION_APPLICATION_NUMBER',
                'name' => Str::upper(Str::replace('_', ' ','SHOW_ACCREDITATION_APPLICATION_NUMBER'))
            ],
            [
                'slug' => 'VIEW_OBSERVER_STATUS_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_OBSERVER_STATUS_APPLICATION'))
            ],
            [
                'slug' => 'SHOW_OBSERVER_STATUS_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','SHOW_OBSERVER_STATUS_APPLICATION'))
            ],
            [
                'slug' => 'CREATE_OBSERVER_STATUS_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','CREATE_OBSERVER_STATUS_APPLICATION'))
            ],
            [
                'slug' => 'VIEW_CIVIL_SOCIETY_ORGANISATION_DASHBOARD',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_CIVIL_SOCIETY_ORGANISATION_DASHBOARD'))
            ],
            [
                'slug' => 'VIEW_ACCREDITATION_OFFICER_HEAD_OF_PROGRAMS_DASHBOARD',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ACCREDITATION_OFFICER_HEAD_OF_PROGRAMS_DASHBOARD'))
            ],
            [
                'slug' => 'VIEW_AFRICAN_UNION_ORGANS_DASHBOARD',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_AFRICAN_UNION_ORGANS_DASHBOARD'))
            ],
            [
                'slug' => 'REVIEW_OBSERVER_STATUS_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','REVIEW_OBSERVER_STATUS_APPLICATION'))
            ],
            [
                'slug' => 'APPROVE_OBSERVER_STATUS_APPLICATION',
                'name' => Str::upper(Str::replace('_', ' ','APPROVE_OBSERVER_STATUS_APPLICATION'))
            ],
            [
                'slug' => 'SHOW_AREAS_OF_EXPERTISE',
                'name' => Str::upper(Str::replace('_', ' ','SHOW_AREAS_OF_EXPERTISE'))
            ],
            [
                'slug' => 'VIEW_OBSERVER_STATUS_APPLICATION_REPORT',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_OBSERVER_STATUS_APPLICATION_REPORT'))
            ],
            [
                'slug' => 'VIEW_ADMINISTRATOR_DASHBOARD',
                'name' => Str::upper(Str::replace('_', ' ','VIEW_ADMINISTRATOR_DASHBOARD'))
            ],
            [
                'slug' => 'ALL_APPLICATION_ORGANISATION_DASHBOARD',
                'name' => Str::upper(Str::replace('_', ' ','ALL_APPLICATION_ORGANISATION_DASHBOARD'))
            ],
            [
                'slug' => 'SHOW_ORGANISATION_AREA_OF_EXPERTISE',
                'name' => Str::upper(Str::replace('_', ' ','SHOW_ORGANISATION_AREA_OF_EXPERTISE'))
            ],
            [
                'slug' => 'UPDATE_ADDITIONAL_INFORMATION',
                'name' => Str::upper(Str::replace('_', ' ','UPDATE_ADDITIONAL_INFORMATION'))
            ],
            [
                'slug' => 'UPDATE_ORGANISATION_INFORMATION',
                'name' => Str::upper(Str::replace('_', ' ','UPDATE_ORGANISATION_INFORMATION'))
            ],
            [
                'slug' => 'UPDATE_CONTACT_PERSON',
                'name' => Str::upper(Str::replace('_', ' ','UPDATE_CONTACT_PERSON'))
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $administrator = Role::where('slug','ADMINISTRATOR')->first();
        $civilSocietyOrganisation = Role::where('slug','CIVIL_SOCIETY_ORGANISATION')->first();
        $accreditationOfficer = Role::where('slug','ACCREDITATION_OFFICER')->first();
        $headOfProgram = Role::where('slug','HEAD_OF_PROGRAMS')->first();
        $africanUnionOrgan = Role::where('slug','AFRICAN_UNION_ORGANS')->first();

        $administratorPermission = Permission::all();
        $civilSocietyOrganisationPermission = Permission::whereIn('slug', [
            'VIEW_REGION_COUNTRIES',
            'VIEW_COUNTRIES',
            'VIEW_OFFICIAL_LANGUAGE',
            'VIEW_ORGANISATION_TYPE',
            'VIEW_TYPE_OF_APPLICATION',
            'VIEW_SCOPE_OF_OPERATION',
            'VIEW_AREAS_OF_EXPERTISE',
            'VIEW_AREAS_OF_EXPERTISE',
            'SHOW_AREAS_OF_EXPERTISE',
            'VIEW_AU_ORGANISATION',
            'VIEW_CURRENCY',
            'SHOW_ORGANISATION_PROFILE',
            'VIEW_ORGANISATION_INFORMATION',
            'CREATE_ORGANISATION_INFORMATION',
            'VIEW_ADDITIONAL_INFORMATION',
            'CREATE_ADDITIONAL_INFORMATION',
            'VIEW_CONTACT_PERSON',
            'CREATE_CONTACT_PERSON',
            'CREATE_CONSULTATIVE_STATUS',
            'CREATE_NATIONAL_CHAPTER',
            'CREATE_OBSERVER_STATUS',
            'CREATE_ACCREDITATION_APPLICATION',
            'SHOW_ACCREDITATION_APPLICATION',
            'VIEW_ATTACHMENT_ACCREDITATION_APPLICATION',
            'SHOW_ACCREDITATION_APPLICATION_NUMBER',
            'SHOW_OBSERVER_STATUS_APPLICATION',
            'CREATE_OBSERVER_STATUS_APPLICATION',
            'VIEW_CIVIL_SOCIETY_ORGANISATION_DASHBOARD',
            'ALL_APPLICATION_ORGANISATION_DASHBOARD',
            'SHOW_ORGANISATION_AREA_OF_EXPERTISE',
            'UPDATE_CONTACT_PERSON',
            'UPDATE_ADDITIONAL_INFORMATION',
            'UPDATE_ORGANISATION_INFORMATION'
        ])->get();
        $accreditationOfficerPermission = Permission::whereIn('slug', [
            'VIEW_ACCREDITATION_APPLICATION',
            'REVIEW_ACCREDITATION_APPLICATION',
            'VIEW_ATTACHMENT_ACCREDITATION_APPLICATION',
            'VIEW_ACCREDITATION_OFFICER_HEAD_OF_PROGRAMS_DASHBOARD',
            'ALL_APPLICATION_ORGANISATION_DASHBOARD',
        ])->get();
        $headOfProgramPermission = Permission::whereIn('slug', [
            'VIEW_ACCREDITATION_APPLICATION',
            'APPROVE_ACCREDITATION_APPLICATION',
            'VIEW_ATTACHMENT_ACCREDITATION_APPLICATION',
            'VIEW_ACCREDITATION_OFFICER_HEAD_OF_PROGRAMS_DASHBOARD',
            'ALL_APPLICATION_ORGANISATION_DASHBOARD'
        ])->get();
        $africanUnionOrganPermission = Permission::whereIn('slug', [
            'VIEW_OBSERVER_STATUS_APPLICATION',
            'VIEW_AFRICAN_UNION_ORGANS_DASHBOARD',
            'VIEW_OBSERVER_STATUS_APPLICATION',
            'REVIEW_OBSERVER_STATUS_APPLICATION',
            'APPROVE_OBSERVER_STATUS_APPLICATION',
            'VIEW_OBSERVER_STATUS_APPLICATION',
            'ALL_APPLICATION_ORGANISATION_DASHBOARD'
        ])->get();

        $administrator->permissions()->saveMany($administratorPermission);
        $civilSocietyOrganisation->permissions()->saveMany($civilSocietyOrganisationPermission);
        $accreditationOfficer->permissions()->saveMany($accreditationOfficerPermission);
        $headOfProgram->permissions()->saveMany($headOfProgramPermission);
        $africanUnionOrgan->permissions()->saveMany($africanUnionOrganPermission);

    }
}
