<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableCampsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("camps")->insert([
            ["C_name" => "龍"],
            ["C_name" => "天"],
            ["C_name" => "義"],
            ["C_name" => "毘"],
        ]);
    }
}
