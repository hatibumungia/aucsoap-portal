<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionNorth = Region::where('code', 'NT')->first();
        $regionSouth = Region::where('code', 'ST')->first();
        $regionWest = Region::where('code', 'WS')->first();
        $regionEast = Region::where('code', 'ES')->first();
        $regionCentral = Region::where('code', 'CT')->first();
        $regionDiaspora = Region::where('code', 'DS')->first();
        $countries = [
            [
                'name' => 'Algeria',
                'code' => 'DZ',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Egypt',
                'code' => 'EG',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Libya',
                'code' => 'LY',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Morocco',
                'code' => 'MA',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mauritania',
                'code' => 'MR',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sahrawi Arab Democratic Republic',
                'code' => 'SA',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Tunisia',
                'code' => 'TN',
                'region_id' => $regionNorth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Angola',
                'code' => 'AO',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Botswana',
                'code' => 'BW',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lesotho',
                'code' => 'LS',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Malawi',
                'code' => 'MW',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mozambique',
                'code' => 'MZ',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Namibia',
                'code' => 'NA',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'South Africa',
                'code' => 'ZA',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Swaziland/Eswatini',
                'code' => 'SZ',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Zambia',
                'code' => 'ZM',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'region_id' => $regionSouth->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Benin',
                'code' => 'BJ',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Cabo Verde',
                'code' => 'CV',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Cote D \'ivoire',
                'code' => 'CI',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Gambia',
                'code' => 'GM',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Ghana',
                'code' => 'GH',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Guinea Bisaau',
                'code' => 'GW',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Guinea',
                'code' => 'GN',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Liberia',
                'code' => 'LR',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mali',
                'code' => 'ML',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Niger',
                'code' => 'NE',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Nigeria',
                'code' => 'NG',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Senegal',
                'code' => 'SN',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Togo',
                'code' => 'TG',
                'region_id' => $regionWest->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Comoros',
                'code' => 'KM',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Djibouti',
                'code' => 'DJ',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Ethiopia',
                'code' => 'ET',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Eritrea',
                'code' => 'ER',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Kenya',
                'code' => 'KE',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Madagascar',
                'code' => 'MG',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mauritius',
                'code' => 'MU',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Rwanda',
                'code' => 'RW',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Seychelles',
                'code' => 'SC',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Somalia',
                'code' => 'SO',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'South Sudan',
                'code' => 'SS',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sudan',
                'code' => 'SD',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Tanzania',
                'code' => 'TZ',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Uganda',
                'code' => 'UG',
                'region_id' => $regionEast->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Burundi',
                'code' => 'BI',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Cameroon',
                'code' => 'CM',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Central African Republic',
                'code' => 'CF',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chard',
                'code' => 'TD',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Congo',
                'code' => 'CG',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Democratic Republic of Congo',
                'code' => 'CD',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Gabon ',
                'code' => 'GA',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sao Tome and Principe',
                'code' => 'TS',
                'region_id' => $regionCentral->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Global wise',
                'code' => 'GS',
                'region_id' => $regionDiaspora->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
