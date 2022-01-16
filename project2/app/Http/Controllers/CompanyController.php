<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;/*esconder a password*/
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Announcement;
use Session;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    function index2(Request $req)
    {
        $data = $req->session()->get('company')['id'];
        return view('Company/myAnnouncements',['companies'=>$data]);/*announcements é um array que vai conter todo o conteudo de data*/
    }

    function login_company(Request $req){/*$req vão ser os dados que utilizador insere*/ 
        $company =  Company::where(['email'=>$req->email])->first();
        if(!$company || !Hash::check($req->password,$company->password)){
            return "Username or password is not matched";
        }else{
            $req->session()->put('company',$company);
            return redirect('/');
        }
    }

    function register_company(Request $req){
        $company = new Company;
        $company->name=$req->name;
        $company->email=$req->email;
        $company->password=Hash::make($req->password);
        $company->save();
        $req->session()->put('company',$company);
        return redirect('/');
    }

    public function store(Request $req)
    {
        if($req->session()->has('company')){
        $req->validate(['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        $name = $req->file('image')->getClientOriginalName();
        $req->file('image')->store('public/images');
        $announcement= new Announcement;
        $announcement->company=$req->session()->get('company')['name'];
        $announcement->role=$req->input('role');
        $announcement->description=$req->input('description');
        $announcement->name_imagem = $name;
        $announcement->path_imagem = $req->file('image');
        $announcement->company_id=$req->session()->get('company')['id'];
        $announcement->company_email=$req->session()->get('company')['email'];
        $announcement->save();
        //countAnnoncments();
        
            return redirect('/');
        }else{
            return redirect('/login_company');
        }
    }

    /*public function countAnnoncments(){
        $companyId=Session::get('company')['id'];
        return Announcement::where('company_id',$companyId)->count();
    }*/

    function removeAnnouncement($id,Request $req)
    {
        $data = Announcement::find($id);
        $company=$req->session()->get('company')['id'];
        //return  $data->company_id;
                if($data->company_id == $company){
                    Announcement::destroy($id);
                    return redirect('/myAnnouncements');
                }else{
                    return "You can not delete this announcement";
                }    
        
    }
}
