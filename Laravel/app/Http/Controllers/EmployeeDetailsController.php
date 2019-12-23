<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;
use App\Employee;
use App\Company;
use App\Models\User;


class EmployeeDetailsController extends Controller
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $employees=$user->employee;


        return view('employee.details')->with('employees',$employees);
    }


    
    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
        //validation for form
        
        $validate= $request->validate([
            'name' => 'required|min:2|max:140',
            'position' => 'required|min:2|max:140',
            'salary' => 'required|min:2|max:140',
            'joining_date' => ''
        ]);
        

        //saving form

        if($validate){            
            $employee=new Employee;
            $employee->name =$request->input('name');
            $employee->company_name =$request->input('company_name');
            $employee->position =$request->input('position');
            $employee->salary =$request->input('salary');
            $employee->joining_date =$request->input('joining_date');
            $employee->user_id= auth()->user()->id;
        
            $employee->save();

        //redirecting to Employee list
            return redirect('/employee/details')->with('success','Employee Added');
        }

    }
    public function edit($id){
        $employees= Employee::find($id);
        
        return view('employee.edit')
                        ->with('employees', $employees);
        
    }

    public function update(Request $request, $id){

        //validation for form

        $validate= $request->validate([
            'name' => 'required|min:2|max:140',
            'position' => 'required|min:2|max:140',
            'salary' => 'required|min:2|max:140',
            'joining_date' => ''
        ]);
        

        //saving form

        if($validate){
            
            $employee=Employee::find($id);
            $employee->name =$request->input('name');
            $employee->position =$request->input('position');
            $employee->salary =$request->input('salary');
            $employee->joining_date =$request->input('joining_date');

            
            
        
            $employee->save();

        //redirecting to Employee list
            return redirect('/employee/details')->with('success','Employee Added');
        }
        
    }

    public function delete($id){
        $employees= Employee::find($id);
        $employees->delete();
        return redirect('/employee/details')->with('success','Employee deleted');
        

    }
    

    

    
}
