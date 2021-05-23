<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Company;

class DashBordsController extends Controller
{



    public function index()

    {
        $companies = Company::all();
        return view('pages.dashbord.index', compact('companies'));
    }

    public function create()

    {
        return view('pages.dashbord.create');
    }

    public function store()

    {
        $request = $this->validateRequest();

        $company = Company::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'state' => $request['state'],
        ]);

        $company->addMedia($request['logo'])->toMediaCollection('logo');

        return redirect('/dashbord');
    }


    public function show(Company $company)

    {

        return view('pages.dashbord.show', compact('company'));
    }

    public function edit(Company $company)

    {
        return view('pages.dashbord.edit', compact('company'));
    }


    public function update(Company $company)
    {
        $request = $this->validateRequest();

        $company->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'state' => $request['state'],
        ]);
            
        if (!empty($request['logo'])) {
            $company->addMedia($request['logo'])->toMediaCollection('logo');
        }

        return redirect('/dashbord/' . $company->id);
    }


    public function destroy(Company $company)

    {
        $company->delete();

        return redirect('/dashbord');
    }



    private function validateRequest()

    {

        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'state' => 'required',
            'logo' => 'sometimes',
        ]);
    }
}
