<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;



class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
    			//echo "succees"; die;
                Session::put('adminSession', $data['email']);
                return redirect('/dashboard');
    		}else{
    			//echo "failed"; die;
                return redirect('/admin')->with('flash_message_error', 'Invalide E-mail ou Mot de passe');
			}	
    	}
    	return view('admin.admin_login');
    }
    public function dashboard(){
         if(Session::has('adminSession')){
            //Perform all dashboard tasks
         }else{
            return redirect('/admin')->with('flash_message_error', 'Veuillez vous connecter s\'il vous plaît!');
         }
         return view('admin.dashboard');
    }
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Déconnexion réussie');

    }
   
}
