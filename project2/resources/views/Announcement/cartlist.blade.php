@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
        <h4>Result for Announcements</h4>
            @foreach($announcements as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{asset('storage/images/').$item->path_imagem}}" alt="{{$item->path_imagem}}" width="200" height="auto">
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
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          

     </div>
</div>
@endsection 