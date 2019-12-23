<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;


class UserProfileController extends Controller
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
        return view('user.profile');
    }

    public function edit(){
        if(Auth::user()){
            $user= (Auth::user()->id);

            if ($user){
                return view('user.edit');
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }

    }

    public function update(Request $request){
        $user= (Auth::user());
        if($user->id){
            if ($user->email===$request['email']){
                $validate= $request->validate([
                    'first_name'=>'min:2|max:140',
                    'last_name'=>'min:2|max:140',
                    'email'=>'required|email'
                ]);
            
            }else{
                $validate= $request->validate([
                    'first_name'=>'min2|max140',
                    'last_name'=>'min2|max140',
                    'email'=>'required|email|unique:users'
                ]);
            }

            if($validate){
                $user->first_name=$request['first_name'];
                $user->last_name=$request['last_name'];
                $user->username=$request['username'];
                $user->email=$request['email'];
                $user->password=$request['password'];
                $user->save();

                
                //redirecting to user profile
                return redirect('/user/profile')->with('success','Profile updated');
            }

            

            

            
        }else{
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
  
        return view('auth.login')
                        ->with('success','User deleted successfully');
    }
}
