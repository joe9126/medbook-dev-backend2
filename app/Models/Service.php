<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'patient_id',
        'type_of_service',
        'general_comments'
    ];

    /**
     * Get the user associated with the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient(): BelongsTo
    {
        return $this->hasOne(Patient::class, 'patient_id', 'id');
    }
}
