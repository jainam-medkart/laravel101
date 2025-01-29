<?php

namespace App\Models;

use Database\Factories\EmployerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<EmployerFactory> */
    use HasFactory;

    // $employer->jobs will give you a list of jobs posted by Employee
    public function jobs() : HasMany
    {
        return $this->hasMany(Job::class);
    }
}
