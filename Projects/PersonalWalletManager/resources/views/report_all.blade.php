@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <a href="/report" class="btn btn-primary"><< Back</a>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Total Report</h1>
      </div>

      {{ Form::open(['url'=>'/report/all']) }}

        <div class="form-group">
          <label for="DateFrom">DateFrom</label>
          <div class="col-md-4">
            <input type="date" name="DateFrom" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="DateTo">DateTo</label>
          <div class="col-md-4">
            <input type="date" name="DateTo" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <input type="submit" name="submit" value="Generate Report" class="btn btn-primary">
        </div>
      {{ Form::close() }}
    </main>
@endsection