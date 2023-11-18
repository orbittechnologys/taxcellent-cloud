<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $guarded = ['id'];
    protected $fillable = [
        'contact_name', 'contact_email', 'mobile_num', 'contact_subject', 'contact_message',
    ];
}
