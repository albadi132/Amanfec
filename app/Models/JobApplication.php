<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'first_name',
        'last_name',
        'full_name',
        'email',
        'phone',
        'location_city',
        'cv_path',
        'message',
        'address_street',
        'address_city',
        'address_state',
        'address_country',
        'address_zip',
        'cover_letter_path',
        'cover_letter_text',
        'linkedin_url',
        'licenses_certifications',
        'requires_sponsorship',
        'is_over_18',
        'has_non_compete',
        'open_to_relocation',
        'relocation_where',
        'eeoc_gender',
        'eeoc_ethnicity',
        'eeoc_race',
        'veteran_status',
        'disability_status',
    ];

    protected $casts = [
        'requires_sponsorship' => 'boolean',
        'is_over_18'           => 'boolean',
        'has_non_compete'      => 'boolean',
        'open_to_relocation'   => 'boolean',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(CareerJob::class, 'job_id');
    }

    public function educations(): HasMany
    {
        return $this->hasMany(JobApplicationEducation::class);
    }
}
