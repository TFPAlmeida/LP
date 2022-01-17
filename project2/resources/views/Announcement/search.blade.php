@extends('master')
@section("content")
<div class="custom-product">  
     <div class="col-sm-4">
     </div> 
     <div class="col-sm-4">
     <div class="trending-wrapper2">
        <h2>Result for Announcements</h>
        @foreach($announcements as $item)
        <div class="search-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image"  src="{{asset('storage/images/'.$item->path_imagem)}}">
          <div class="">
            <h2>{{$item['company']}}</h2>
            <h5>{{$item['description']}}</h5>
          </div>
        </a>
        </div>
        @endforeach
      </div>   
     </div>
</div>
@endsection