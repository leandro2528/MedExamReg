<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'exame',
        'foto'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
