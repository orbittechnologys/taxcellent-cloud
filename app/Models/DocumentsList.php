<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentsList extends Model
{
    use HasFactory;

    protected $table = 'documents_list';

    protected $primaryKey = "id";
    protected $fillable = [
        'doc_name',
        'created_date',
        'updated_date',
    ];
}
