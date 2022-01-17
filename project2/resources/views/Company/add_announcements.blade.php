@extends('master')
@section("content")
<div class="card">  
<div class="about2">
    <h2>Add Announcement</h2>
    </div>
    <form action="{{url('/addAnnouncement')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="from-group">               
                    <label for="" class="about2">Role</label>
                    <input type="text" name="role">
                    </div>
                <div class="from-group">
                    <label for="" class="about2">Description</label>
                    <textarea name="description" rows="3" ></textarea>
                </div>               
                <div class="from-group">
                    <input type="file" name="image" class="about2" cols="30" rows="10">
                </div>
                <button type="submit" class="button">Submit</button>
            </form>
</div>
@endsection