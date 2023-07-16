<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sake extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        "SK_name",
        "SK_price",
        "SK_brewery_id",
        "SK_type_id",
        "SK_alcohol",
        "SK_img_file_path",
        "SK_tasting",
        "SK_description",
        "SK_online_site_url",
        "SK_delete_flag",
        "SK_flavor",
        "SK_side_dish",
        "SK_acidity",
        "SK_specific_gravity",
    ];

    public function brewery(){
        return $this->hasOne(Brewery::class, "B_id", "SK_brewery_id");
    }

    public function sake_type(){
        return $this->hasOne(SakeType::class, "SK_type_id", "SKT_id");
    }
}
