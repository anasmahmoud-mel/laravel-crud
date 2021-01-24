<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class citzien extends Model
{
    protected $fillable = [
        'citzien_fullname',
        'citzien_gender',
        'citzien_city',
        'citzien_NID',
        'citzien_mobile',
        'citzien_address'
    ];
}
