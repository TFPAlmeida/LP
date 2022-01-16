@extends('master')<!--permite "estender" um modelo, que define suas próprias seções, etc. Um modelo que você pode estender definirá suas próprias seções usando yield, no qual você pode colocar suas próprias coisas em seu arquivo de visualização-->
@section("content")<!--é responsável em definir uma seção de conteúdo-->
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <div class="col-sm-6">
           <h1>Contactos</h1>
       <h2>{{$announcements['company_email']}}</h2><!--importar company ds bsde de dados-->
    </div>
   </div>
</div>
@endsection