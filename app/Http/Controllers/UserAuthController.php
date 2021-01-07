<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Models\Userdata;
use App\Models\User;
class UserAuthController extends Controller
{
    
    public function login()
    {
    	# code...
    	return view('auth.login');

    }
    public function register()
    {
    	# code...
    	return view('auth.reg');
    }


    public function create(Request $req)
    {
    	# code...
    	// return $req->input();
    	$msg = $req->validate([
    		'name'=>'required',
    		// 'lnm'=>'required',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:5|max:10',
    	]);

        $User = new User;
        // $User->fnm = $req->fnm;
         $User->name = $req->name;
        $User->email = $req->email;
        $User->password = Hash::make($req->password);
        $query = $User->save();


    	

    	if($query){
    		return redirect('/')->with('success','User register Successfully...');
    	}else{
            return back()->with('fail',' oops, Something went wrong');
    	}
    }

    public function check(Request $req)
    {
        # code...
        $msg = $req->validate([
            // 'email'=>'required|email|unique:users',
            'email'=>'required',
            'password'=>'required|min:5|max:10',
        ]);

            $User = User::where('email','=',$req->email)->first();
           if($User){
            if(Hash::check($req->password,$User->password)){
                    $req->session()->put('welcome',$User->id);
                    return redirect('articles');
            }else{
                return back()->with('fail','Invalied password');
            }

           }else{
                    return back()->with('fail','no account found for this email');
           }

               }
           

                public function articles()
                {
                    // # code...
                    // if(session()->has('welcome')){
                    //     $User = User::where('id','=',session('welcome'))->first();
                    //     $data = [
                    //         'userinfo' => $User
 

                    //     ];
                    // }
                    return view('admin.articles');
                }


                public function logout()
                {
                    # code...
                    if(session()->has('welcome')){
                        session()->pull('welcome');
                        return redirect('/');
                    }
                }

           }




    //1/june 2018
    //nov/2018