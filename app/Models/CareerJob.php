<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CareerJob extends Model
{
    protected $fillable = ['title', 'description', 'location', 'status', 'linkedin_url', 'close_at', 'department_id', 'location_id'];


    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }
    public function department() { return $this->belongsTo(Department::class); }
public function location()   { return $this->belongsTo(Location::class); }
}
