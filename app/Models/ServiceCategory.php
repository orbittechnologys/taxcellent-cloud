<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $table = 'service_category';
   
    protected $primaryKey = "id";
    protected $fillable = [
            'cat_name','cat_title','cat_desc','created_date', 'updated_date',
        ];

        public function service()
		{
			return $this->hasMany(Service::class,'service_cat_id','id');
 		}
}

