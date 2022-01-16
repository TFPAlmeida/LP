<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;/*esconder a password*/
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Company;
use App\Models\User;

class AdminController extends Controller
{
    function login_admin(Request $req){/*$req vão ser os dados que utilizador insere*/ 
        $admin =  Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password,$admin->password)){
            return "Username or password is not matched";
        }else{
            $req->session()->put('admin',$admin);
            return redirect('/');
        }
    }

    function register_admin(Request $req){
        $admin = new Admin;
        $admin->name=$req->name;
        $admin->email=$req->email;
        $admin->password=Hash::make($req->password);
        $admin->save();
        $req->session()->put('admin',$admin);
        return redirect('/');
    }

    function admin_users($id)
    {
        User::destroy($id);
        return redirect('/users');
    }

    function admin_companies($id)
    {
        Company::destroy($id);
        return redirect('/companies');
    }

    function admin_announcements($id)
    {
        Announcement::destroy($id);
        return redirect('/announcements');
    }
}
