<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'business_dor',
        'dob',
        'profileType',
        'company',
        'business_name',
        'gstin_attachment',
        'office_country',
        'office_zip_code',
        'office_state',
        'office_city',
        'office_address',
        'business_role',
        'business_status',
        'CIN_deatils',
        'LLPIN_deatils',
        'city',
        'country',
        'state',
        'zip_code',
        'address1',
        'address2',
        'aadhar_card_number',
        'PAN_Number',
        'GST_Number',
        'aadhar_card_attachment',
        'pan_card_attachment',
        'email_verified_at',
        'password',
        'mobile_num',
        'key_personName',
        'key_personDesignation',
        'key_personEmail',
        'key_personPhone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The userOtherSection that belong to the user.
     */
    public function userOtherSection()
    {
        return $this->hasMany(UserOtherSection::class, 'users_id', 'id');
    }
}
