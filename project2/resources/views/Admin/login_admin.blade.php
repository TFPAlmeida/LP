@extends('master')<!--permite "estender" um modelo, que define suas próprias seções, etc. Um modelo que você pode estender definirá suas próprias seções usando yield, no qual você pode colocar suas próprias coisas em seu arquivo de visualização-->
@section("content")<!--é responsável em definir uma seção de conteúdo-->
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login_admin" method="POST" >
                <div class="form-group">
                    @csrf
                    <h2>Login Admin</h2>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection