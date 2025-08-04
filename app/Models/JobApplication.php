<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = ['job_id', 'full_name', 'email', 'phone', 'cv_path', 'message'];

    public function job(): BelongsTo
    {
        return $this->belongsTo(CareerJob::class, 'job_id');
    }
}
