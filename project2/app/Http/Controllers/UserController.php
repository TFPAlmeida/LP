<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;/*esconder a password*/
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Announcement;

class UserController extends Controller
{
    function login_user(Request $req){/*$req vão ser os dados que utilizador insere*/ 
        $user =  User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or password is not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register_user(Request $req){
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=($req->password);
        $password=($req->confirm_password);  
        if($user->password == $password){
            $user->password=Hash::make($password);
            $user->save();
            $req->session()->put('user',$user);
            return redirect('/');
        }else{
            return "Passwords not Match";
        }
       
    }

    function contactos($id,Request $req)
    {
        if($req->session()->has('user')){
            $data = Announcement::find($id);  
            return view('Announcement/contactos',['announcements'=>$data]);
        }else{
            return redirect('/login_user');
        }
        
    }
}
