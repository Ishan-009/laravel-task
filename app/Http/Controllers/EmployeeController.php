<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::with('company')->get();
        return view('employee.index', compact('employees'));
    }


    public function create()
    {
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'phone' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
        ]);

        $employee = new Employee([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'company_id' => $request->get('company_id'),
        ]);

        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee added successfully.');
    }


    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }


    public function edit($id)
    {
        $companies = Company::all();
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
            'company_id' => 'required|exists:companies,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }


        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->company_id = $request->input('company_id');
        $employee->update();

        return redirect()->route('employee.index')->with('success', 'Employee created successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }

}
