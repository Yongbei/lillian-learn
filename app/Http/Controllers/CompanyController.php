<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\Company\StoreRequest;
use App\Http\Requests\Company\UpdateRequest;

class CompanyController extends Controller
{

    public function index(Request $request)
    {
        if (is_null($request->search)) {
            $companies = Company::all();
        } else {
            $companies = Company::where('name', $request->search)->get();
        }

        return view('company.index', [
            'companies' => $companies
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Company::create([
            'name' => $data['name']
        ]);

        return redirect()->route('companies.index');
    }

    public function show($id)
    {
        $company = Company::find($id);

        return view('company.show', [
            'company' => $company
        ]);
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view('company.edit', [
            'company' => $company
        ]);
    }

    public function update(UpdateRequest $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $company = Company::find($id);

        $company->update([
            'name' => $request->name
        ]);

        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        $company = Company::find($id);

        $company->delete();

        return redirect()->back();
    }
}
