<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Internship;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Internship::insert([
            [
                'user_id' => '1',
                'vocational' => 'Teknik Informatika',
                'internship_date_start' => Carbon::create('2023', '06', '01'),
                'internship_date_finish' => Carbon::create('2023', '12', '01'),
                'people_total' => '3',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'vocational' => 'Teknik Mesin',
                'internship_date_start' => Carbon::create('2023', '06', '01'),
                'internship_date_finish' => Carbon::create('2023', '12', '01'),
                'people_total' => '2',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'vocational' => 'Teknik Akuntansi',
                'internship_date_start' => Carbon::create('2023', '06', '01'),
                'internship_date_finish' => Carbon::create('2023', '12', '01'),
                'people_total' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => '3',
                'vocational' => 'Manajemen Informatika',
                'internship_date_start' => Carbon::create('2024', '06', '01'),
                'internship_date_finish' => Carbon::create('2024', '12', '01'),
                'people_total' => '2',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => '3',
                'vocational' => 'Teknik Komputer',
                'internship_date_start' => Carbon::create('2024', '06', '01'),
                'internship_date_finish' => Carbon::create('2024', '12', '01'),
                'people_total' => '2',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
