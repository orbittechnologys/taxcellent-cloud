<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedDocuments extends Model
{
    use HasFactory;
    protected $table = 'user_upload_document';

    protected $primaryKey = "id";
    protected $fillable = [
        'user_id',
        'doc_id',
        'pan_card',
        'id_proof',
        'adress_proof',
        'office_address_proof',
        'no_object_certificate',
        'property_tax_receipt',
        'bank_statements',
        'adhaar_card',
        'noc_authorised',
        'incoporation_certificate',
        'photo',
        'letter_of_authorization',
        'digital_sign',
        'partnership_deed',
        'passport_copy',
        'final_doc',
        'cat_id',
        'service_id'
    ];
}
