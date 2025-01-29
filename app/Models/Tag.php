<?php

namespace App\Models;

use Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<TagFactory> */
    use HasFactory;


    public function jobs() {
        $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }

}
