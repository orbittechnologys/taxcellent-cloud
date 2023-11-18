<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
   
    protected $primaryKey = "id";
    protected $fillable = [
            'service_cat_id', 'service_name', 'service_include','reg_process','timeframe','price','discount','user_doc','status','created_at','updated_at'
        ];


        public function serviceCategory()
		{
			return $this->hasOne('App\Models\ServiceCategory','id','service_cat_id');
 		}
}

