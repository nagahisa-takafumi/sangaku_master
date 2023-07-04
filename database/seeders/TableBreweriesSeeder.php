<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableBreweriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("breweries")->insert([
            [
                "B_name" => "株式会社丸山酒造場",
                "B_place_id" => 1,
                "B_description" => "明治30年(西暦1897年)創業。江戸時代には製麹（せいきく、糀づくり）を生業とし信州まで販路を拡げたと云う。
                大東亜戦争下では当主の出征もあり、企業統制により休業。戦後に復活し現在に到る。
                酒蔵は高田平野の東縁部の田園地帯にあり、東頸城丘陵西端部の里山を水源とする軟水の井戸水に恵まれ、昔ながらの蓋麹法と箱麹法による手づくり糀で酒を仕込む。",
                "B_mail" => "maruyama@example.com",
                "B_tel" => "09012345678",
                "B_address" => "新潟県上越市三和区塔ノ輪617",
                "B_img_file_path" => "sample1",
                "B_url" => "https://maruyama-shuzojo.jp/index.html",
                "B_delete_flag" => 0,
            ],
            [
                "B_name" => "千代の光酒造株式会社",
                "B_place_id" => 2,
                "B_description" => "新潟県妙高市で万延元年（１８６０年）より、お酒を造り続けております。
                小さな蔵ですが、全製品吟醸酒に準じたきめ細やかな造りです。淡麗さの中にやわらかさを併せ持つ独特の酒質が特徴です。",
                "B_mail" => "chiyo_hikari@example.com",
                "B_tel" => "09012345678",
                "B_address" => "新潟県妙高市窪松原656",
                "B_img_file_path" => "sample2",
                "B_url" => "https://chiyonohikari.com/",
                "B_delete_flg" => 0,
            ],
            [
                "B_name" => "頚城酒造株式会社",
                "B_place_id" => 3,
                "B_description" => "地元柿崎は日本三大薬師に数えられる霊峰「米山」の麓の町であり、有名な戦国大名である上杉謙信の家臣随一の猛将と言われた柿崎景家ゆかりの地であります。海と山に囲まれた自然豊かな柿崎は、越後杜氏の中でも有名な「頚城杜氏」のふるさとであり、数多くの名杜氏を輩出している酒造りの里です。また平成に入り、柿崎の中山間地より湧き出る「大出口泉水」が平成名水100選に選ばれる等、素晴らしい水に恵まれ、米作りが盛んな土地柄でもあります。",
                "B_mail" => "kubiki@example.com",
                "B_tel" => "09012345678",
                "B_address" => "新潟県上越市柿崎区柿崎5765",
                "B_img_file_path" => "sample3",
                "B_url" => "https://kubiki-shuzo.co.jp/",
                "B_delete_flg" => 0,
            ],
        ]);
    }
}
