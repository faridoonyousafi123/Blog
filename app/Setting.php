<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=[

            'sitename','site_address','site_email','site_contact'

    ];
}
