<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;
use App\Company;


class CompanyProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companies= Company::orderBy('name', 'desc')->paginate(5);
        return view('company.profile')->with('companies', $companies);
    }

    public function create(){
        return view('company.create');
    }



    public function store(Request $request){
        //validation for form
        $validate= $request->validate([
            'name' => 'required|min:2|max:140',
            'industry' => 'required|min:2|max:140',
            'address' => 'required|min:2|max:140',
            'details' => 'required|min:2'
        ]);

        //saving form

        if($validate){
            $company=new Company;
            $company->name =$request->input('name');
            $company->industry =$request->input('industry');
            $company->address =$request->input('address');
            $company->details =$request->input('details');
        
            $company->save();

        //redirecting to company profile
            return redirect('/company/profile')->with('success','Company details updated');
        }
    }

    public function edit($id){
        $companies= Company::find($id);
        //return $company;
        return view('company.edit')
                        ->with('companies', $companies);
        
    }

    

    public function update(Request $request, $id){
        //validation for form
        $validate= $request->validate([
            'name' => 'required|min:2|max:140',
            'industry' => 'required|min:2|max:140',
            'address' => 'required|min:2|max:140',
            'details' => 'required|min:2'
        ]);

        //saving form

        if($validate){
            $company=Company::find($id);
            $company->name =$request->input('name');
            $company->industry =$request->input('industry');
            $company->address =$request->input('address');
            $company->details =$request->input('details');
        
            $company->save();

        //redirecting to company profile
            return redirect('/company/profile')->with('success','Company details updated');
        }

        
    }

    public function delete($id){
        $companies= Company::find($id);
        $companies->delete();
        return redirect('/company/profile')->with('success','Company deleted');
        

    }
    
/*
Company::table('companies')->where('id',$id)->delete();
  
        return redirect('/company/profile')
                        ->with('success','Company deleted successfully');
*/
    

    
}
