<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddAdvertisement extends Model
{
    protected $fillable = [
        'type',
        'location',
        'details',
        'property_image'
    ];
}
