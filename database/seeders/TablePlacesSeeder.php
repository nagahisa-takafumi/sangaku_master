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

class TablePlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('[Start] import data >>> places');
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
            $brewery = Place::create([
                "P_id" => $row[0],
                "P_which" => $row[1],
                "P_number" => $row[2],
                "P_camp_id" => $row[3],
            ]);
        });

        $lexer->parse(storage_path('data/places.csv'), $interpreter);
        $this->command->info('[End] import data >>> places');
    }
}