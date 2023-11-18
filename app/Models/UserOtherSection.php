<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOtherSection extends Model
{

    protected $table = 'user_other_section';

    protected $primaryKey = 'id';

    protected $fillable = [
        'users_id',
        // 'sr_no',
        'document_id_no',
        'attachment'
    ];
}
