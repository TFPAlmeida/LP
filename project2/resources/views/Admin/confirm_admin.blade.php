@extends('master')
@section("content")
<div class="card">  
<div class="about2">
    <h2>Admin</h2>
    </div>
    <form action="{{url('/confirmAdmin')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="from-group">               
                    <label for="" class="about2">Password</label>
                    <input type="password" name="password_admin">
                    </div>
                <button type="submit" class="button">Submit</button>
            </form>
</div>
@endsection