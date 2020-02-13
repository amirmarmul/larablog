<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * 
     */
    protected $fillable = [
        'app_name',
        'app_description',
        'admin_email',
        'company_email',
        'company_address',
        'company_phone',
        'facebook_link',
        'instagram_link',
    ];
}
