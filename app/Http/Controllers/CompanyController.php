<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    //
    public function index()
    {
        $companies = Company::with('employees')->get();
        return view('companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:companies',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'website' => 'required',
        ]);
        // $validator = Validator::make($request->all(), [
        //     'image' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $company = new Company();
        $company->name = $validatedData['name'];
        $company->email = $validatedData['email'];
        $company->website = $validatedData['website'];

        if ($request->hasFile('logo')) {
            $company->logo = $request->file('logo')->storePublicly('images', 'public');

        }

        $company->save();

        return redirect()->route('company.index');
    }

    public function show($id)
    {
        $company = Company::with('employees')->findOrFail($id);
        return view('companies.view', ['company' => $company]);
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('company.edit', ['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email', Rule::unique('companies')->ignore($id)],
            'logo' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'website' => 'required|active_url',
        ]);

        $company = Company::findOrFail($id);
        $company->name = $validatedData['name'];
        $company->email = $validatedData['email'];
        $company->website = $validatedData['website'];

        if ($request->hasFile('logo')) {
            $company->logo = $request->file('logo')->storePublicly('images', 'public');

        }

        $company->update();

        return redirect()->route('company.index');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('company.index');
    }
}
