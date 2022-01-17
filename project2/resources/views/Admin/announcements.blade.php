@extends('master')
@section("content")
<?php 
use App\Models\Announcement;
$total=0;
$data = Announcement::all();
foreach($data as $item){
  $total++;
}
?>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper2">
            <h2>Announcements ({{$total}})</h2>
            @foreach($data as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{asset('storage/images/'.$item->path_imagem)}}"  width="200" height="auto">
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
                <a href="/announcements/{{$item->id}}" class="btn btn-warning" >Remove</a>
             </div>
            </div>
            @endforeach
          </div>
          

     </div>
</div>
@endsection 