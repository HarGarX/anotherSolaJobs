<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

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
}
