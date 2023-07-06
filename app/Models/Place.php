<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        "P_which",
        "P_number",
        "P_camp_id",
    ];

    public function camp(){
        return $this->hasOne(Camp::class, "C_id", "P_camp_id");
    }

    public function place_kbn(){
        if($this->P_which == "SK"){
            return "酒";
        }
        else{
            return "その他";
        }
    }
}
