<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    //
    function index()
    {
        $data = Announcement::all();
        return view('Announcement/announcement',['announcements'=>$data]);/*announcements é um array que vai conter todo o conteudo de data*/
    }

    function detail($id)
    {
        $data = Announcement::find($id);  
        return view('Announcement/detail',['announcements'=>$data]);     
    }

    function search(Request $req)
    {
        $data = Announcement::where('company', 'like', '%'.$req->input('query').'%')->get();
        return view('Announcement/search',['announcements'=>$data]);       
    } 
    
    function addToCart(Request $req)
    {
        if($req->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->announcement_id=$req->announcements_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login_user');
        }
        
    }

    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    
    function cartList()
    {
        $userId=Session::get('user')['id'];
        $announcements= DB::table('cart')
        ->join('announcements','cart.announcement_id','=','announcements.id')
        ->where('cart.user_id',$userId)
        ->select('announcements.*','cart.id as cart_id')
        ->get();

        return view('Announcement/cartlist',['announcements'=>$announcements]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    
       
}