@extends('layouts.master')
@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Profile</h1>
    </div>

    {{ Form::open(['url' => '/profile/update','class' => 'form-horizontal','enctype' => 'multipart/form-data']) }}

      @if(is_null($User->photo))
        <img src="/uploads/user/logo.jpeg" alt="User Image" class="img img-responsive" height="100">      
      @else
        <img src="/uploads/user/{{ $User->photo }}" alt="User Image" class="img img-responsive" height="100">
      @endif

      <div class="form-group">
        <label for="Name" class="control-label col-md-4">Name</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="name" value="{{ $User->name }}">
        </div>
      </div>

       <div class="form-group">
        <label for="Email" class="control-label col-md-4">Email</label>
        <div class="col-md-4">
          <input type="email" class="form-control" name="email" value="{{ $User->email }}">
        </div>
      </div>

      <div class="form-group">
        <label for="Photo" class="control-label col-md-4">Photo</label>
        <div class="col-md-4">
          <input type="file" class="form-control" name="photo">
        </div>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
      </div>
      <div id="text-content"></div>
    {{ Form::close() }}
  </main>
@endsection