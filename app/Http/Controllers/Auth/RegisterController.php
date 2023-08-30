<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AccreditationApplication;
use App\Models\AccreditationApplicationStatus;
use App\Models\ApplicationStatus;
use App\Models\Category;
use App\Models\Contact;
use App\Models\CsoClassification;
use App\Models\OfficialLanguage;
use App\Models\Region;
use App\Models\ScopeOfOperation;
use App\Models\TypeOfApplication;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function storeFile($accountName, $file): string
    {
        $fileName = $accountName . '-' . time() . '.' . $file->extension();
        $filePath = 'accreditation-application';
        $file->move(public_path($filePath), $fileName);
        return $fileName;
    }

    public function showRegistrationForm()
    {
        $regions = Region::OrderBy('name')->with('countries')->get();
        $officialLanguages = OfficialLanguage::OrderBy('name')->get();
        $classifications = CsoClassification::OrderBy('name')->get();
        $scopeOfOperations = ScopeOfOperation::OrderBy('name')->get();
        $typeOfApplications = TypeOfApplication::OrderBy('name')->get();
        $categories = Category::with('subCategories')->get();
//        return $categories;
        return view('auth.register', compact(
                'regions',
                'officialLanguages',
                'classifications',
            'scopeOfOperations',
            'typeOfApplications',
            'categories'
            ));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'country_id' => ['required'],
            'organisation_legal_name' => ['required', 'string', 'max:255'],
            'official_acronym' => ['required', 'string', 'max:255'],
            'state_or_country' => ['required', 'string', 'max:255'],
            'postfix_or_zip' => ['required', 'string'],
            'city' => ['required', 'string'],
            'street' => ['required', 'string'],
            'postal_address' => ['required', 'string'],
            'telephone_number' => ['required', 'string'],
            'mobile_number' => ['required', 'string'],
            'fax_number' => ['nullable', 'string'],
            'email_address' => ['required', 'string', 'email', 'max:255'],
            'organisation_website' => ['required', 'string'],
            'official_language_id' => ['required', 'string'],
            'cso_classification_id' => ['required', 'string'],
            'scope_of_operation_id' => ['required', 'string'],
            'cso_registration_number' => ['required', 'string'],
            'cso_registration_date' => ['required', 'string'],
            'registration_expiring_date' => ['required', 'string'],
            'cso_years_of_experience' => ['required', 'numeric'],
//            'accreditation_date' => ['required', 'string'],
//            'cso_accreditation_number' => ['required', 'string'],
//            'accreditation_expiring_date' => ['required', 'string'],
            'type_of_application_id' => ['required', 'string'],
            'contact_person_level' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'functional_title' => ['required', 'string'],
            'department' => ['required', 'string'],
            'telephone' => ['required', 'string'],
            'fax' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'whatsapp_number' => ['required', 'string'],
            'email' => ['required', 'string'],
            'contact_person_level_2' => ['required', 'string'],
            'first_name_2' => ['required', 'string'],
            'last_name_2' => ['required', 'string'],
            'functional_title_2' => ['required', 'string'],
            'department_2' => ['required', 'string'],
            'telephone_2' => ['required', 'string'],
            'fax_2' => ['required', 'string'],
            'mobile_2' => ['required', 'string'],
            'whatsapp_number_2' => ['required', 'string'],
            'email_2' => ['required', 'string'],

            'application_letter' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'registration_or_acknowledgement_certificate' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'certified_articles_of_association' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'bylaws' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'statutes_or_constitution_detailing_the_mandate' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'scope_and_governing_structure_or_organisational_profile' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'annual_income_and_expenditure_statement' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'names_of_all_donors_and_other_funding_sources_last_two_years' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'evidence_of_competency_in_thematic_areas' => ['required', File::types(['pdf'])->smallerThan(4096)],
            'other_relevant_documents' => ['required', File::types(['pdf'])->smallerThan(4096)]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return array
     */
    protected function create(array $data)
    {
        $contacts = Contact::select('id', 'organisation_registration_number')->get();
        $organisationRegistrationNumber = null;
        if ($contacts->count() > 0) {

            $filtered = max(Arr::map($contacts->toArray(), function ($value) {
                return (int)Arr::last(Str::of($value['organisation_registration_number'])->explode('-')->toArray());
            }));
            foreach ($contacts as $contact) {
                if ((int)Arr::last(Str::of($contact['organisation_registration_number'])->explode('-')->toArray()) == $filtered) {
                    $organisationRegistrationNumber = $contact['organisation_registration_number'];
                }
            }

            $this->$organisationRegistrationNumber = 'CSO' . '-' .
                Str::padLeft((int)Arr::last(Str::of($organisationRegistrationNumber)->explode('-')->toArray()) + 1, 7, 0);

        } else {
            $this->$organisationRegistrationNumber = 'CSO' . '-' . '0000001';
        }
        DB::beginTransaction();

        try {
            $accreditationApplication = [
                'type_of_application_id' => $data['type_of_application_id'],
                'application_status_id' => $data['application_status_id'],
                'scope_of_operation_id' => $data['scope_of_operation_id'],
                'cso_classification_id' => $data['cso_classification_id'],
                'cso_registration_date' => $data['cso_registration_date'],
                'cso_years_of_experience' => $data['cso_years_of_experience'],
                'registration_expiring_date' => $data['registration_expiring_date'],
                'application_letter' => $this->storeFile($this->$organisationRegistrationNumber, $data['application_letter']),
                'bylaws' => $this->storeFile($this->$organisationRegistrationNumber, $data['bylaws']),
                'scope_and_governing_structure_or_organisational_profile' => $this->storeFile($this->$organisationRegistrationNumber, $data['scope_and_governing_structure_or_organisational_profile']),
                'statutes_or_constitution_detailing_the_mandate' => $this->storeFile($this->$organisationRegistrationNumber, $data['statutes_or_constitution_detailing_the_mandate']),
                'annual_income_and_expenditure_statement' => $this->storeFile($this->$organisationRegistrationNumber, $data['annual_income_and_expenditure_statement']),
                'names_of_all_donors_and_other_funding_sources_last_two_years' => $this->storeFile($this->$organisationRegistrationNumber, $data['names_of_all_donors_and_other_funding_sources_last_two_years']),
                'evidence_of_competency_in_thematic_areas' => $this->storeFile($this->$organisationRegistrationNumber, $data['evidence_of_competency_in_thematic_areas']),
                'other_relevant_documents' => $this->storeFile($this->$organisationRegistrationNumber, $data['other_relevant_documents']),
            ];
            $accreditationApplicationStatus = new AccreditationApplicationStatus();
            $applicationStatus = ApplicationStatus::where('slug', 'received')->first();

//            $accreditationApplication->save();

            $accreditationApplicationId = $accreditationApplication->id;
            $accreditationApplicationStatus->application_status_id = $applicationStatus->id;
            $accreditationApplicationStatus->accreditation_application_id = $accreditationApplicationId;
//            $accreditationApplicationStatus->save();

            return AccreditationApplication::created($accreditationApplication);

            DB::commit();
            return back()->with('success','Fail to save data.');
        } catch (Exception $exception) {
            DB::rollBack();
            return back()->with('success','Fail to save data.');
        }

//        Contact::create([
//            'country_id' => $data['country_id'],
//            'organisation_legal_name' => $data['organisation_legal_name'],
//            'official_acronym' => $data['official_acronym'],
//            'state_or_country' => $data['state_or_country'],
//            'postfix_or_zip' => $data['postfix_or_zip'],
//            'city' => $data['city'],
//            'street' => $data['street'],
//            'postal_address' => $data['postal_address'],
//            'telephone_number' => $data['telephone_number'],
//            'mobile_number' => $data['mobile_number'],
//            'fax_number' => $data['fax_number'],
//            'email_address' => $data['email_address'],
//            'organisation_website' => $data['organisation_website'],
//            'organisation_registration_number' => $data['organisation_registration_number'],
//            'allow_editing' => false
//        ]);

    }
}
