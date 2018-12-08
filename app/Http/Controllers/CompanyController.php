<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companie;

class CompanyController extends Controller
{
    public function add(Request $request)
    {
        $company = new Companie();
        $company->company = $request->company;
        $company->save();
        return back()->with('status', 'Company Successfully Added');
    }

    public function delete($id)
    {
        $company = Companie::where('id', $id)->firstOrFail();
        $company->delete();
        return back()->with('delete', 'Company Deleted Successfully');
    }

    public function update($id, Request $request){
        $company = Companie::where('id', $id)->firstOrFail();
        $company->company = $request->company;
        $company->save();
        return back()->with('update', 'Company Updated Successfully');
    }
}
