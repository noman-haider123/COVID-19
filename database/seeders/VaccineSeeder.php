<?php

namespace Database\Seeders;

use App\Models\vaccine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = File::get('database/vaccine.json');
        $vaccines = collect(json_decode($data, true));
        $vaccines->each(function($details){
            vaccine::create([
                'Vaccine_name' => $details['Vaccine_name'],
                'Manufacture' => $details['Manufacture'],
                'Expiry_date' => $details['Expiry_date'],
                'AvailableOrNot' => $details['AvailableOrNot']
            ]);
        });
    }
}
