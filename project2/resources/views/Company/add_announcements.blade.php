@extends('master')
@section("content")
<div class="card">
    <div class="card-header">
        <h4>Add Announcement</h4>
    </div>
    <div class="card-body">
    <form action="{{url('/addAnnouncement')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Role</label>
                    <input type="text" class="from-control" name="role">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="from-control"></textarea>
                </div>
                </div>
                
                <div class="col-md-12">
                    <input type="file" name="image" class="from-control">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
    </div>
  
</div>
@endsection