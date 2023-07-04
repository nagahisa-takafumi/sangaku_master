<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablePlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("places")->insert([
            [
                "P_which" => "SK",
                "P_number" => "1",
                "P_camp_id" => "1",
            ],
            [
                "P_which" => "SK",
                "P_number" => "2",
                "P_camp_id" => "1",
            ],
            [
                "P_which" => "SK",
                "P_number" => "1",
                "P_camp_id" => "2",
            ],
            [
                "P_which" => "ST",
                "P_number" => "1",
                "P_camp_id" => "3",
            ],
            [
                "P_which" => "ST",
                "P_number" => "1",
                "P_camp_id" => "4",
            ],
            [
                "P_which" => "ST",
                "P_number" => "2",
                "P_camp_id" => "2",
            ],
        ]);
    }
}
