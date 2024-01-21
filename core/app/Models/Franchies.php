<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Franchies extends Model
{
    protected $fillable = ['pr_info_name','email','mobile_telephon e','pincode','city','street','state','current_bussiness','what_type','business_describe','owned_bussiness','been_franchies','location_info_city','existing_commercial','retail_spacearea','demographics_location','location_preference','desc_shop_location','frontage_retail_space','checkbox','sign','declaration_name','date','investment','is_delete'];
    public $timestamps = false;
    
}
