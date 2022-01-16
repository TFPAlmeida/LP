@extends('master')
@section("content")

<div class="custom-announcement">
        <h2>Announcements</h2>
        @foreach($announcements as $item)
        <div class="about">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{asset('storage/images/').$item->path_imagem}}" alt="{{$item->path_imagem}}">          
            <h2>{{$item['company']}}</h2>
            <h4>{{$item['role']}}</h4>
        </a>
        </div>
        @endforeach
           
      </div>
      </div>
</div>
@endsection