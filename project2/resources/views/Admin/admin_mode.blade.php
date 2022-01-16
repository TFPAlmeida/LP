@extends('master')
@section("content")
<?php 
use App\Models\Announcement;
use App\Models\Company;
use App\Models\User;
$data1 = Announcement::all();
$data2 = Company::all();
$data3 = User::all();
?>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Users</h4>
            @foreach($data3 as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->id}}</h2>
                      <h4>{{$item->name}}</h4>
                      <h5>{{$item->email}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/admin_mode_user/{{$item->id}}" class="btn btn-warning" >Remove</a>
             </div>
            </div>
            
            @endforeach
          </div>

          <div class="trending-wrapper">
            <h4>Companies</h4>
            @foreach($data2 as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->id}}</h2>
                      <h4>{{$item->name}}</h4>
                      <h5>{{$item->email}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/admin_mode/{{$item->id2}}" class="btn btn-warning" >Remove</a>
             </div>
            </div>
            
            @endforeach
          </div>
          

     </div>
</div>
@endsection 
