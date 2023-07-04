<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sakes")->insert([
            [
                "SK_name" => "雪中梅 普通酒",
                "SK_price" => 2055,
                "SK_brewery_id" => 1,
                "SK_type_id" => 1,
                "SK_alcohol" => 20,
                "SK_img_file_path" => "sample1.png",
                "SK_tasting" => 1,
                "SK_description" => "やわらかな口当たりと品の良い甘み、スッキリとしたキレのよい後味が特長。契約栽培米を含む上越産米を使用。五百万石を箱麹法で製麴し、掛米にはコシイブキと五百万石を使用。",
                "SK_online_site_url" => "https://kajiyanet.com/products/settyubai-futsuu",
                "SK_delete_flag" => 0,
                "SK_flavor" => "フルーティーな香り",
                "SK_side_dish" => "バナナ",
                "SK_acidity" => 2,
                "SK_specific_gravity" => 15,
            ],
            [
                "SK_name" => "雪中梅 純米酒",
                "SK_price" => 1897,
                "SK_brewery_id" => 1,
                "SK_type_id" => 5,
                "SK_alcohol" => 40,
                "SK_img_file_path" => "sample2.jpg",
                "SK_tasting" => 0,
                "SK_description" => "究極の酒米",
                "SK_online_site_url" => "https://kajiyanet.com/products/settyubai-fu_junmai",
                "SK_delete_flag" => 0,
                "SK_flavor" => "フローラルな香り",
                "SK_side_dish" => "からあげ,やきとり",
                "SK_acidity" => 3,
                "SK_specific_gravity" => 40,
            ],
            [
                "SK_name" => "特別本醸造 真",
                "SK_price" => 2607,
                "SK_brewery_id" => 2,
                "SK_type_id" => 2,
                "SK_alcohol" => 5,
                "SK_img_file_path" => "sample3.jpg",
                "SK_tasting" => 0,
                "SK_description" => "新潟清酒の特徴である淡麗さと米本来のうまさをかねそなえたお酒です。",
                "SK_online_site_url" => "https://kajiyanet.com/products/chiyonohikari-sin",
                "SK_delete_flag" => 0,
                "SK_flavor" => "スパイシーな香り",
                "SK_side_dish" => "本多忠カツ",
                "SK_acidity" => null,
                "SK_specific_gravity" => null,
            ],
            [
                "SK_name" => "越路乃紅梅 特別本醸造",
                "SK_price" => 1993,
                "SK_brewery_id" => 3,
                "SK_type_id" => 3,
                "SK_alcohol" => 9,
                "SK_img_file_path" => "sample4.jpg",
                "SK_tasting" => 1,
                "SK_description" => "柿崎産契約栽培「五百万石」を磨き上げ、香りと味のバランスを追求したお酒です。瓶燗一度火入・低温ビン熟成により実現した、やさしい香りと口当たり、そして心地よい後味をお楽しみ下さい。",
                "SK_online_site_url" => null,
                "SK_delete_flag" => 0,
                "SK_flavor" => "ハーバルな香り",
                "SK_side_dish" => "しんげんもち",
                "SK_acidity" => null,
                "SK_specific_gravity" => null,
            ],
            [
                "SK_name" => "MANDBA（万燈場・マンドバ） 芽出（めだし） 直詰生酒",
                "SK_price" => 3520,
                "SK_brewery_id" => 3,
                "SK_type_id" => 3,
                "SK_alcohol" => 15,
                "SK_img_file_path" => "sample5.jpg",
                "SK_tasting" => 1,
                "SK_description" => "上越市安塚区を舞台に、デザイン会社U・STYLE（新潟市）が米づくりから酒造りまで挑戦した、新しい日本酒としてクラウドファンディングを行いました。U・STYLEの代表の先祖が代々つないできた安塚の棚田を引き受け、栽培期間中 農薬・化学肥料不使用で米づくりを2018年にはじめました。その発展として日本酒を蔵付き酵母、生酛造りにて製造しました。かたふねとしてもはじめての試みの造りとなりました。ぜひ私たちの初めての挑戦を味わってもらいたいです。",
                "SK_online_site_url" => "https://kajiyanet.com/products/katafune-mandba-medashi",
                "SK_delete_flag" => 0,
                "SK_flavor" => "さわやかな香り",
                "SK_side_dish" => "白米",
                "SK_acidity" => null,
                "SK_specific_gravity" => null,
            ],
        ]);
    }
}
