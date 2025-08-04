<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
     protected $fillable = [
        'name',
        'title',
        'bio',
        'photo',
        'department_id',
        'display_order',
        'show_on_homepage',
        'status'
    ];

      protected $casts = [
        'show_on_homepage' => 'boolean',
        'display_order' => 'integer',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
