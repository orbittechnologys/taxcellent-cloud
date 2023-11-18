<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackages extends Model
{
    use HasFactory;
    protected $table = 'service_packages';
   
    protected $primaryKey = "id";
    protected $fillable = [
            'service_cat_id','service_id','package_name','status','created_date','updated_date',
        ];

        public function serviceCategory()
		{
			return $this->hasOne('App\Models\ServiceCategory','id','service_cat_id');
 		}

 		public function serviceName()
		{
			return $this->hasOne('App\Models\Service','id','service_id');
 		}
}

