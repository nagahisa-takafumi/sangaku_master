<?php

namespace Database\Seeders;

use App\Models\Brewery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;
use App\Models\Office;

class TableBreweriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('[Start] import data >>> brewerys');
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
            $brewery = Brewery::create([
                "B_id" => $row[0],
                "B_name" => $row[1],
                "B_place_id" => $row[2],
                "B_description" => $row[3],
                "B_mail" => $row[4],
                "B_tel" => $row[5],
                "B_address" => $row[6],
                "B_img_file_path" => $row[7],
                "B_url" => $row[8],
                "B_delete_flag" => (int)$row[9],
            ]);
        });

        $lexer->parse(storage_path('data/brewery.csv'), $interpreter);
        $this->command->info('[End] import data >>> brewerys');
    }
}