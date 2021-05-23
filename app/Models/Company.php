<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Company extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];


    public function jobs()

    {
        return $this->hasMany(Job::class);
    }

    public function users()

    {
        return $this->hasMany(User::class);
    }
    public function addJobs($jobs)
    {

        $this->jobs()->create($jobs);
    }

    public function getLogoAttribute()
    {
        return $this->getFirstMediaUrl('logo');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile();
    }

}
