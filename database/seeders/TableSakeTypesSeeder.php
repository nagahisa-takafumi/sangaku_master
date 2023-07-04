<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSakeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sake_types")->insert([
            ["SKT_name" => "日本酒"],
            ["SKT_name" => "甘酒"],
            ["SKT_name" => "果実酒"],
            ["SKT_name" => "ワイン"],
            ["SKT_name" => "ビール"],
            ["SKT_name" => "焼酎"],
            ["SKT_name" => "ウイスキー"],
            ["SKT_name" => "梅酒"],
            ["SKT_name" => "リキュール"],
        ]);
    }
}
