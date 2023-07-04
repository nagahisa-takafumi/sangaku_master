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
        "SK_tastig",
        "SK_description",
        "SK_online_site_url",
        "SK_delete_flag",
        "SK_flavor",
        "SK_side_dish",
        "SK_acidity",
        "SK_specific_gravity",
    ];
}
