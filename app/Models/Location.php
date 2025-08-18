<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['country', 'city', 'building', 'floor_office', 'district', 'street', 'postal_code', 'state_region', 'email', 'phone', 'latitude', 'longitude', 'is_hq', 'address_note'];

    public function jobs() { return $this->hasMany(CareerJob::class); }
}
