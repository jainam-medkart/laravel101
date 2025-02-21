<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model {

    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title' , 'salary'];

     // $job->employer will return you the details about job
    public function employer() : BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class , foreignPivotKey : 'job_listing_id');
    }
}
