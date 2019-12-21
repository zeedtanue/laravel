<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;


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
        return view('company.profile');
    }

    public function edit(){
        if(Auth::user()){
            $user= (Auth::user()->id);

            if ($user){
                return view('company.edit');
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }

    }

    public function update(){

    }


    public function delete(){
        
    }
    

    

    
}
