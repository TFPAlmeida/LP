@extends('master')<!--permite "estender" um modelo, que define suas próprias seções, etc. Um modelo que você pode estender definirá suas próprias seções usando yield, no qual você pode colocar suas próprias coisas em seu arquivo de visualização-->
@section("content")<!--é responsável em definir uma seção de conteúdo-->
<div class="container">
   <div class="row">
       <div class="col-sm-6">
        
       <img class="detail-img" src="{{asset('storage/images/').$announcements->path_imagem}}" alt="{{$announcements->path_imagem}}" width="200" height="auto">
       </div>
       <div class="col-sm-6">
           
       <h2>{{$announcements['company']}}</h2><!--importar company ds bsde de dados-->
       <h3>Role: {{$announcements['role']}}</h3><!--importar role ds bsde de dados-->
       <h4>Details: {{$announcements['description']}}</h4><!--importar description ds bsde de dados-->
       <br><br>
       @if(!Session::has('company') && !Session::has('admin'))
       <form action="/add_to_cart" method="POST">
           @csrf<!--por causa do method ser post-->
           <input type="hidden" name="announcements_id" value="{{$announcements['id']}}">
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <form action="/contactos/{{$announcements['id']}}" method="POST">
           @csrf<!--por causa do method ser post-->
           <input type="hidden" name="announcements_id" value="{{$announcements['id']}}">
           <button class="btn btn-success">Contactos</button>
       </form>
       <br><br>
       @elseif(Session::has('company'))
       
                <div class="col-sm-3">
                <a href="/removeAnnouncement/{{$announcements->id}}" class="btn btn-warning" >Remove to Cart</a>
                </div>
               
       @endif
    </div>
   </div>
</div>
@endsection