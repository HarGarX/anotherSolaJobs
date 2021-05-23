<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class CompanyJobsController extends Controller
{
    public function store(Company $company)
    {
        $company->addJobs(request()->validate([
            'jobTitle' => 'required',
            'jobDescription' => 'required',
            'gender' => 'required',

        ]));

        return back();
        // Job::create([
        //     'company_id' => $company->id,
        //     'jobTitle' => request('jobTitle'),
        //     'jobDescription' => request('jobDescription'),
        //     'gender' => request('gender'),
        // ]);
    }
}
