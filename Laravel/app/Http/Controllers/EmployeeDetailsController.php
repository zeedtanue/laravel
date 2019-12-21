<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;


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
        return view('employee.details');
    }


    public function edit(){

    }

    public function update(){
        
    }

    public function delete(){
        
    }
    

    

    
}
