<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Gender;
use App\Models\Service;

class Patient extends Model
{
    use HasFactory;
    protected $table ="tblpatient";
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'dob',
        'gender_id',
        'service_id'

    ];

     /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dob' => 'date',
    ];

    /**
     * Get the user associated with the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class,'patient_id');
    }
    public function service():HasOne{
        return $this->hasOne(Service::class,'patient_id');
    }
}
