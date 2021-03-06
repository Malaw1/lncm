<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
    			//echo "succees"; die;
                Session::put('adminSession', $data['email']);
                return redirect('/admin/dashboard');
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

    public function settings(){
        return view('admin.settings');
         }
    
    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else{
            echo "false"; die;
        }

    }    

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email'=> Auth::user()->email])->first();
            $current_password =$data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Mise à jour du mot de passe réussi');
            }else{
                return redirect('/admin/settings')->with('flash_message_error','Ancien mot de passe est Incorrect');

            }

        }
    }

    public function index_echan(){
        return view('admin.echantillons.index_echan');
    }

    public function stocks(){
        return view('stocks.index');
    }


    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Déconnexion réussie');

    }
   
}
