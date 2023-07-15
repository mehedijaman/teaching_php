@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Income Category</h1>
      </div>

      {{ Form::open(['url' => 'income/category/store','class' => 'form-horizontal']) }}        
        <div class="form-group">
          <label for="Name" class="control-label col-md-4">Category Name</label>
          <div class="col-md-6">
            <input type="text" name="Name" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-2">
            <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
          </div>
        </div>
      {{ Form::close() }}

    <table class="table table-responsive table-bordered table-stripped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($Categories as $Category)
        <tr>
          <td>{{ $Category->Name }}</td>
          <td>{{ $Category->created_at }}</td>
          <td>{{ $Category->updated_at }}</td>
          <td>
            <a href="income/category/edit/{{ $Category->id }}" class="btn btn-warning">Edit</a>
            <a href="income/category/delete/{{ $Category->id }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </main>
@endsection