<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        "B_name",
        "B_place_id",
        "B_description",
        "B_mail",
        "B_tel",
        "B_address",
        "B_img_file_path",
        "B_url",
    ];

    public function place(){
        return $this->hasOne(Place::class, "P_id", "B_place_id");
    }
}
