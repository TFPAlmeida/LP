@extends('master')
@section("content")
<?php 
use App\Models\Announcement;
$data = Announcement::all();
?>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Announcements</h4>
            @foreach($data as $item)
            @if($item->company_id == $companies)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->company}}</h2>
                      <h4>{{$item->role}}</h4>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removeAnnouncement/{{$item->id}}" class="btn btn-warning" >Remove to Cart</a>
             </div>
            </div>
            @endif
            @endforeach
          </div>
          

     </div>
</div>
@endsection 