@extends('master')
@section("content")
<?php 
use App\Models\User;
$total = 0;
$data = User::all();
foreach($data as $item){
  $total++;
}
?>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Users ({{$total}})</h2>
            @foreach($data as $item)
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
                <a href="/users/{{$item->id}}" class="btn btn-warning" >Remove</a>
             </div>
            </div>
            
            @endforeach
          </div>
     </div>
</div>
@endsection 