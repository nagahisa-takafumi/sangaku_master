<?php

namespace Database\Seeders;

use App\Models\Brewery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;
use App\Models\Office;
use App\Models\Place;
use App\Models\Sake;

class TableSakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('[Start] import data >>> sakes');
        //CSV読み込み設定
        $config = new LexerConfig();
        //セパレーター
        $config->setDelimiter(",");
        //一行目をタイトル行としてデータベースに反映しない場合はtrue
        $config->setIgnoreHeaderLine(true);


        $lexer = new Lexer($config);
        $interpreter = new Interpreter();
        $interpreter->addObserver(function(array $row) {
            // 登録処理
            $brewery = Sake::create([
                "SK_id" => $row[0],
                "SK_name" => $row[1],
                "SK_price" => $row[2],
                "SK_brewery_id" => $row[3],
                "SK_type_id" => $row[4],
                "SK_alcohol" => $row[5],
                "SK_img_file_path" => $row[6],
                "SK_tasting" => (int)$row[7],
                "SK_description" => $row[8],
                "SK_online_site_url" => $row[9],
                "SK_delete_flag" => (int)$row[10],
            ]);
        });

        $lexer->parse(storage_path('data/sake.csv'), $interpreter);
        $this->command->info('[End] import data >>> sakes');
    }
}