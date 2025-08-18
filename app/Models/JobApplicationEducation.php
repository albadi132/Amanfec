<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicationEducation extends Model
{
    use HasFactory;
 protected $table = 'job_application_educations'; // <-- مهم
    protected $fillable = [
        'job_application_id',
        'school',
        'degree',
        'discipline',
        'end_year',
    ];

    /**
     * العلاقة مع الطلب الرئيسي
     */
    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }
}
