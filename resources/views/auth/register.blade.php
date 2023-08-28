@extends('layouts.web')

@section('content')
    <div class="card-body register-card-body">
        <!-- Timeline example  -->
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <!-- The timeline -->
                <div class="timeline">
                    <!-- timeline time label -->
{{--                    <div class="time-label">--}}
{{--                        <span class="bg-red">10 Feb. 2014</span>--}}
{{--                    </div>--}}
                    <!-- /.timeline-label -->
                    <!-- timeline item -->

                    <div>
                        <i class="fas fa-address-book bg-blue"></i>
                        <div class="timeline-item">
{{--                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>--}}
                            <h3 class="timeline-header"><a href="#">CSO Contact</a> registration</h3>

                            <div class="timeline-body">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Organisation legal name</label>
                                                <input type="text" name="organisation_legal_name" class="form-control" required placeholder="{{ __('Enter Organisation legal name') }}"
                                                       value="{{ $contact->organisation_legal_name ?? old('organisation_legal_name') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Official acronym of the CSO</label>
                                                <input type="text" name="official_acronym" class="form-control" required placeholder="{{ __('Enter Official acronym of the CSO') }}"
                                                       value="{{ $contact->official_acronym ?? old('official_acronym') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>State/County</label>
                                                <input type="text" name="state_or_country" class="form-control" required placeholder="{{ __('Enter State/County') }}"
                                                       value="{{ $contact->state_or_country ?? old('state_or_country') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Postfix/ZIP</label>
                                                <input type="text" name="postfix_or_zip" class="form-control" required placeholder="{{ __('Enter Postfix/ZIP') }}"
                                                       value="{{ $contact->postfix_or_zip ?? old('postfix_or_zip') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" required placeholder="{{ __('Enter City') }}"
                                                       value="{{ $contact->city ?? old('city') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Street</label>
                                                <input type="text" name="street" class="form-control" required placeholder="{{ __('Enter Street') }}"
                                                       value="{{ $contact->street ?? old('street') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Postal Address</label>
                                                <input type="text" name="postal_address" class="form-control" required placeholder="{{ __('Enter Postal Address') }}"
                                                       value="{{ $contact->postal_address ?? old('postal_address') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Telephone Number</label>
                                                <input type="text" name="telephone_number" class="form-control" required placeholder="{{ __('Enter Telephone Number') }}"
                                                       value="{{ $contact->telephone_number ?? old('telephone_number') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Mobile Number </label>
                                                <input type="text" name="mobile_number" class="form-control" required placeholder="{{ __('Enter Mobile Number') }}"
                                                       value="{{ $contact->mobile_number ?? old('mobile_number') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Fax Number</label>
                                                <input type="text" name="fax_number" class="form-control" required placeholder="{{ __('Enter Fax Number') }}"
                                                       value="{{ $contact->fax_number ?? old('fax_number') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>E-Mail address</label>
                                                <input type="text" name="email_address" class="form-control" required placeholder="{{ __('Enter E-Mail address') }}"
                                                       value="{{ $contact->email_address ?? old('email_address') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Organization website </label>
                                                <input type="text" name="organisation_website" class="form-control" required placeholder="{{ __('Enter Organization website') }}"
                                                       value="{{ $contact->organisation_website ?? old('organisation_website') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
{{--                            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>--}}
                            <h3 class="timeline-header"><a href="#">CSO information</a> details</h3>
                            <div class="timeline-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO Region headquarter</label>
                                            <select class="form-control" name="region_id"  id="region_id">
                                                <option>{{ __('----Select region----') }} </option>
                                                @foreach ($regions as $region)
                                                    <option value="{{ $region->id }}" @selected(old('region') == $region->name)>
                                                        {{ $region->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO country headquarter</label>
                                            <select class="form-control" name="country_id" id="country">
                                                <option>{{ __('----Select Country----') }} </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Official Languages</label>
                                            <select class="form-control" name="official_language_id"  id="official_language_id">
                                                <option>{{ __('----Select official language----') }} </option>
                                                @foreach ($officialLanguages as $officialLanguage)
                                                    <option value="{{ $officialLanguage->id }}" @selected(old('official_language_id') == $officialLanguage->name)>
                                                        {{ $officialLanguage->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Classification of CSO</label>
                                            <select class="form-control" name="classification_id"  id="classification_id">
                                                <option>{{ __('----Select Classification of CSO----') }} </option>
                                                @foreach ($classifications as $classification)
                                                    <option value="{{ $classification->id }}" @selected(old('classification_id') == $classification->name)>
                                                        {{ $classification->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO operation scope</label>
                                            <select class="form-control" name="scope_of_operation_id"  id="scope_of_operation_id">
                                                <option>{{ __('----Select CSO operation scope----') }} </option>
                                                @foreach ($scopeOfOperations as $scopeOfOperation)
                                                    <option value="{{ $scopeOfOperation->id }}" @selected(old('scope_of_operation_id') == $scopeOfOperation->name)>
                                                        {{ $scopeOfOperation->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-comments bg-yellow"></i>
                        <div class="timeline-item">
{{--                            <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>--}}
                            <h3 class="timeline-header"><a href="#">CSO Registration</a> Details</h3>
                            <div class="timeline-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO registration number</label>
                                            <input type="text" name="cso_registration_number" class="form-control" required placeholder="{{ __('Enter CSO registration number') }}"
                                                   value="{{ $contact->cso_registration_number ?? old('cso_registration_number') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO date of registration</label>
                                            <input type="text" name="cso_registration_date" class="form-control" required placeholder="{{ __('Enter CSO date of registration') }}"
                                                   value="{{ $contact->cso_registration_date ?? old('cso_registration_date') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Registration expiring date</label>
                                            <input type="text" name="registration_expiring_date" class="form-control" required placeholder="{{ __('Enter registration expiring date') }}"
                                                   value="{{ $contact->state_or_country ?? old('registration_expiring_date') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO years of experience</label>
                                            <input type="number" name="cso_years_of_experience" class="form-control" required placeholder="{{ __('Enter CSO years of experience') }}"
                                                   value="{{ $contact->cso_years_of_experience ?? old('cso_years_of_experience') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">3 Jan. 2014</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fa fa-camera bg-purple"></i>
                        <div class="timeline-item">
{{--                            <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>--}}
                            <h3 class="timeline-header"><a href="#">CSO Accreditation</a> Details</h3>
                            <div class="timeline-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO accreditation number</label>
                                            <input type="text" name="cso_accreditation_number" class="form-control" required placeholder="{{ __('Enter CSO accreditation number') }}"
                                                   value="{{ $contact->cso_accreditation_number ?? old('cso_accreditation_number') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Accreditation date</label>
                                            <input type="text" name="accreditation_date" class="form-control" required placeholder="{{ __('Enter Accreditation date') }}"
                                                   value="{{ $contact->accreditation_date ?? old('accreditation_date') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Accreditation expiring date</label>
                                            <input type="text" name="accreditation_expiring_date" class="form-control" required placeholder="{{ __('Enter accreditation expiring date') }}"
                                                   value="{{ $contact->accreditation_expiring_date ?? old('accreditation_expiring_date') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>CSO granted status</label>
                                            <select class="form-control" name="type_of_application_id"  id="type_of_application_id">
                                                <option>{{ __('----Select CSO operation scope----') }} </option>
                                                @foreach ($typeOfApplications as $typeOfApplication)
                                                    <option value="{{ $typeOfApplication->id }}" @selected(old('type_of_application_id') == $typeOfApplication->name)>
                                                        {{ $typeOfApplication->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Accreditation date</label>
                                            <input type="text" name="accreditation_date" class="form-control" required placeholder="{{ __('Enter Accreditation date') }}"
                                                   value="{{ $contact->accreditation_date ?? old('accreditation_date') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Accreditation expiring date</label>
                                            <input type="text" name="accreditation_expiring_date" class="form-control" required placeholder="{{ __('Enter accreditation expiring date') }}"
                                                   value="{{ $contact->accreditation_expiring_date ?? old('accreditation_expiring_date') }}" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .dual-list .list-group {
                                        margin-top: 8px;
                                        height: 360px;
                                        overflow-y: auto;
                                    }

                                    .list-group .list-group-item.borderless:not(:first-child,:last-child) {
                                        border-top: none !important;
                                        border-bottom: none !important;
                                    }

                                    .list-group .list-group-item.borderless:first-child {
                                        border-bottom: none !important;
                                    }

                                    .list-group .list-group-item.borderless:last-child {
                                        border-top: none !important;
                                    }

                                    .list-group .list-group-item:hover {
                                        background-color: #e5e5e5;
                                    }

                                    .list-left li, .list-right li {
                                        cursor: pointer;
                                    }

                                    .list-arrows {
                                        padding-top: 100px;
                                    }

                                    .list-arrows button {
                                        margin-bottom: 20px;
                                    }

                                    .register-card-body .input-group .input-group-text.with-border {
                                        border-left: 1px solid #ced4da;
                                    }
                                    .register-card-body .input-group .form-control.with-border {
                                        border-right: 1px solid #ced4da;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="dual-list list-left">
                                            <div class="well text-left">
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-md-10">--}}
{{--                                                        <div class="input-group mb-2">--}}
{{--                                                            <div class="input-group-prepend">--}}
{{--                                                                <span class="input-group-text with-border" id="search-list-action">--}}
{{--                                                                    <span class="fas fa-search"></span>--}}
{{--                                                                </span>--}}
{{--                                                            </div>--}}
{{--                                                            <input type="text" name="SearchList" class="form-control with-border"--}}
{{--                                                                   placeholder="Search" aria-describedby="search-list-action" />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-2">--}}
{{--                                                        <div class="icheck-primary ml-2">--}}
{{--                                                            <input type="checkbox" id="all-selector" title="select all">--}}
{{--                                                            <label for="all-selector"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <ul class="list-group --categories-group selectable">
                                                    @foreach($categories as $category)
                                                        <li class="list-group-item d-flex justify-content-between" data-id="{{$category->id}}">
                                                            {{ $category->name }}

                                                            <div class="icheck-primary text-right mr-0 mr-md-2">
                                                                <input type="checkbox" class="cat-item-selector" id="selector-{{$category->id}}" value="{{$category->id}}">
                                                                <label for="selector-{{$category->id}}"></label>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="dual-list list-left">
                                            <div class="well text-left">
                                                <ul class="list-group --subcategories-group"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="dual-list list-left">
                                            <div class="well text-left">
                                                <ul class="list-group --selected-group"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- timeline item -->
                    <div>
                        <i class="fa fa-camera bg-purple"></i>
                        <div class="timeline-item">
{{--                            <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>--}}
                            <h3 class="timeline-header"><a href="#">CSO Contact </a> person One</h3>
                            <div class="timeline-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Contact Person Level</label>
                                            <input type="text" name="contact_person_level" class="form-control" required placeholder="{{ __('Enter contact person level') }}"
                                                   value="{{ $contact->contact_person_level ?? old('contact_person_level') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control" required placeholder="{{ __('Enter First Name') }}"
                                                   value="{{ $contact->first_name ?? old('first_name') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control" required placeholder="{{ __('Enter Lst Name') }}"
                                                   value="{{ $contact->last_name ?? old('last_name') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Functional Title</label>
                                            <input type="text" name="functional_title" class="form-control" required placeholder="{{ __('Enter functional title level') }}"
                                                   value="{{ $contact->functional_title ?? old('functional_title') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type="text" name="department" class="form-control" required placeholder="{{ __('Enter Department') }}"
                                                   value="{{ $contact->department ?? old('department') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" name="telephone" class="form-control" required placeholder="{{ __('Enter telephone') }}"
                                                   value="{{ $contact->telephone ?? old('telephone') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" name="fax" class="form-control" required placeholder="{{ __('Enter fax') }}"
                                                   value="{{ $contact->fax ?? old('fax') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" name="mobile" class="form-control" required placeholder="{{ __('Enter Mobile') }}"
                                                   value="{{ $contact->mobile ?? old('mobile') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Whatsapp number</label>
                                            <input type="text" name="whatsapp_number" class="form-control" required placeholder="{{ __('Enter whatsapp number') }}"
                                                   value="{{ $contact->whatsapp_number ?? old('whatsapp_number') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>E-mail address</label>
                                            <input type="text" name="email" class="form-control" required placeholder="{{ __('Enter email address') }}"
                                                   value="{{ $contact->email ?? old('email') }}" autofocus>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- timeline item -->
                    <div>
                        <i class="fa fa-camera bg-purple"></i>
                        <div class="timeline-item">
{{--                            <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>--}}
                            <h3 class="timeline-header"><a href="#">CSO Contact </a> person Two</h3>
                            <div class="timeline-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Contact Person Level</label>
                                            <input type="text" name="contact_person_level_2" class="form-control" required placeholder="{{ __('Enter contact person level') }}"
                                                   value="{{ $contact->contact_person_level_2 ?? old('contact_person_level_2') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name_2" class="form-control" required placeholder="{{ __('Enter First Name') }}"
                                                   value="{{ $contact->first_name_2 ?? old('first_name_2') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name_2" class="form-control" required placeholder="{{ __('Enter Lst Name') }}"
                                                   value="{{ $contact->last_name_2 ?? old('last_name_2') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Functional Title</label>
                                            <input type="text" name="functional_title_2" class="form-control" required placeholder="{{ __('Enter functional title level') }}"
                                                   value="{{ $contact->functional_title_2 ?? old('functional_title_2') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type="text" name="department_2" class="form-control" required placeholder="{{ __('Enter Department') }}"
                                                   value="{{ $contact->department_2 ?? old('department_2') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" name="telephone_2" class="form-control" required placeholder="{{ __('Enter telephone') }}"
                                                   value="{{ $contact->telephone_2 ?? old('telephone_2') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" name="fax_2" class="form-control" required placeholder="{{ __('Enter fax') }}"
                                                   value="{{ $contact->fax_2 ?? old('fax_2') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" name="mobile_2" class="form-control" required placeholder="{{ __('Enter Mobile') }}"
                                                   value="{{ $contact->mobile_2 ?? old('mobile_2') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Whatsapp number</label>
                                            <input type="text" name="whatsapp_number_2" class="form-control" required placeholder="{{ __('Enter whatsapp number') }}"
                                                   value="{{ $contact->whatsapp_number_2 ?? old('whatsapp_number_2') }}" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>E-mail address</label>
                                            <input type="text" name="email_2" class="form-control" required placeholder="{{ __('Enter email address') }}"
                                                   value="{{ $contact->email_2 ?? old('email_2') }}" autofocus>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-check-circle bg-gray"></i>

                        <div class="timeline-item">

                            <div class="timeline-body">
                                <div class="timeline-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('Register CSO Contact') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->

                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Data variables
            let regions = @json($regions);
            let categories = @json($categories);
            let dataObject = {}

            // Selector variables
            let $body = $('body')
            let $searchList = $('[name=SearchList]');
            let $categoryCheckbox = $('.cat-item-selector');
            let $categoriesList = $('.--categories-group');
            let $subcategoriesList = $('.--subcategories-group');
            let $selectedList = $('.--selected-group');

            let selected_region = $('#region_id').val()
            if(selected_region)  filterAndShowCountries(selected_region)

            $("#region_id").on('change', function () {

                let selectedRegion = $(this).val();
                filterAndShowCountries(selectedRegion)

            });

            function filterAndShowCountries(selectedRegion) {
                let found = regions.find(region => region.id === selectedRegion)
                if(found) {
                    let countries = found.countries

                    let options = '<option>{{ __('----Select Country----') }} </option>'
                    countries.forEach(country => {
                        options += `<option value="${country.id}">${country.name}</option>`
                    })
                    $('#country').empty().append(options);
                }
            }

            $searchList.keyup(function (e) {
                let code = e.keyCode || e.which;
                if (code === '9') return;
                if (code === '27') $(this).val(null);
                let $rows = $(this).closest('.dual-list').find('.list-group li');
                let val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                $rows.show().filter(function () {
                    let text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });

            $body.on('click', '.list-group.selectable .list-group-item', function () {
                let $listItem = $(this);
                $listItem.addClass('active').trigger('activated').siblings().removeClass('active');
            });

            $('.dual-list #all-selector').click(function () {
                let $checkBox = $(this);
                if (!$checkBox.hasClass('selected')) {
                    $checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active').trigger('activated');
                } else {
                    $checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active').trigger('activated');
                }
            });

            $body.on('change', '.cat-item-selector', function (e) {
                e.stopPropagation();

                let $checkBox = $(this);
                let itemId = $(this).val();
                let category = categories.find(cat => cat.id === itemId)

                if(category) {
                    console.log($checkBox)
                    let subcategories = category.sub_categories
                    if ($checkBox.prop('checked')) {
                        dataObject[`${category.id}`] = [...subcategories.map(sub_cat => {
                            return {
                                'category_id': category.id,
                                'subcategory_id': sub_cat.id
                            }
                        })]
                        subcategories.forEach(sub_cat => {
                            $subcategoriesList.find(`#item-${sub_cat.id}`).prop('checked', true)
                        })
                    } else {
                        dataObject[`${category.id}`] = []
                        subcategories.forEach(sub_cat => {
                            $subcategoriesList.find(`#item-${sub_cat.id}`).prop('checked', false)
                        })
                        delete dataObject[`${category.id}`]
                    }
                    console.log("Updates, ", dataObject)

                    getSelectedItemsFromDataObject(dataObject);
                }
            })

            $('.list-group.selectable').on('activated', '.list-group-item', function () {
                let itemId = $(this).data('id');
                let category = categories.find(cat => cat.id === itemId)

                if(category) {

                    $subcategoriesList.empty();
                    let subcategories = category.sub_categories
                    subcategories.forEach(subCategory => {
                        $subcategoriesList.append(getSubcategoryItem(category, subCategory))
                    })
                }

            });

            $('.list-group.selectable').on('de-activated', '.list-group-item', function (e) {

                let itemId = $(this).data('id');
                let category = categories.find(cat => cat.id === itemId)

                if(category) {
                    let subcategories = category.sub_categories
                    $subcategoriesList.empty()
                    subcategories.forEach(subCategory => {
                        $subcategoriesList.append(getSubcategoryItem(category, subCategory))
                    })
                }

            });

            $body.on('click', '.dual-list .subcat-item-selector', function () {
                let checkBox = $(this);
                let [category_id, sub_category_id] = checkBox.val().split('&')

                if (checkBox.is(':checked')) {
                    if(!dataObject[`${category_id}`]) dataObject[`${category_id}`] = []
                    dataObject[`${category_id}`].push({category_id: category_id, subcategory_id: sub_category_id})

                    $categoriesList.find(`#selector-${category_id}`).prop('checked', true)
                } else {
                    dataObject[`${category_id}`].splice(dataObject[`${category_id}`].indexOf({category_id: category_id, subcategory_id: sub_category_id}), 1)

                    if(dataObject[`${category_id}`].length === 0) {
                        delete dataObject[`${category_id}`]
                        $categoriesList.find(`#selector-${category_id}`).prop('checked', false)
                    }
                }

                getSelectedItemsFromDataObject(dataObject);
            });

            $body.on('click', '.--remove-selected-subcategory', function(){
                let [category_id, sub_category_id] = $(this).data('id').split('&');

                dataObject[category_id].splice(dataObject[category_id].indexOf({category_id: category_id, subcategory_id: sub_category_id}),1)

                $subcategoriesList.find(`#item-${sub_category_id}`).prop('checked', false)

                if(dataObject[category_id].length === 0) {
                    $categoriesList.find(`#selector-${category_id}`).prop('checked', false)
                    delete dataObject[category_id]
                }

                getSelectedItemsFromDataObject(dataObject);
                console.log("Removing:", dataObject)
            })

            function getSubcategoryItem(category, subcategory) {
                let checked = ''

                if(dataObject[`${category.id}`]){
                    let found = dataObject[`${category.id}`].find(item => item.category_id === category.id && item.subcategory_id === subcategory.id)
                    checked = found ? 'checked' : ''
                }

                let $subCategoryListItem = `<li class="list-group-item" style="transition: all .3s ease" id="${subcategory.id}">`;
                $subCategoryListItem += `<div class="icheck-primary">`;
                $subCategoryListItem += `<input type="checkbox" class="subcat-item-selector" ${checked} id="item-${subcategory.id}" value="${category.id}&amp;${subcategory.id}"/>`;
                $subCategoryListItem += `<label for="item-${subcategory.id}">${subcategory.name}</label>`;
                $subCategoryListItem += `</div>`;
                $subCategoryListItem += `</li>`;
                return $subCategoryListItem;
            }

            function getSelectedItemsFromDataObject(dataObject) {
                let $selectedItem = ``;

                Object.keys(dataObject).forEach(key => {
                    $selectedItem += `<li class="list-group-item borderless">`;
                    let category = categories.find(c => c.id === key);

                    $selectedItem += `<div class="font-weight-bold">`;
                    $selectedItem += `${category.name}`;
                    $selectedItem += `</div>`;
                    dataObject[key].forEach(item => {
                        let sub_category = category.sub_categories.find(c => c.id === item.subcategory_id);
                        let $selectedSubcategories = ``;

                        $selectedSubcategories += `<div class="ml-4 d-flex justify-content-between align-items-center">`;
                        $selectedSubcategories += `${sub_category.name}`;
                        $selectedSubcategories += `<i class="fas fa-times-circle text-danger --remove-selected-subcategory" data-id="${category.id}&${sub_category.id}"></i>`;
                        $selectedSubcategories += `</div>`;
                        $selectedItem += `${$selectedSubcategories}`;
                    });
                    $selectedItem += `</li>`;
                })

                $selectedList.empty().append($selectedItem);
            }
        });
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            // $('.select2').select2()

            //Initialize Select2 Elements
            // $('.select2bs4').select2({
            //     theme: 'bootstrap4'
            // })
        })
    </script>
@endsection
