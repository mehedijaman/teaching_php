@extends('layouts.master')
@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Income</h1>
    </div>
    <a href="/income/create" class="btn btn-primary">Add New Income</a>
    <a href="/income/trash" class="btn btn-info">View Trash</a>
    <a href="/income/delete" class="btn btn-danger">Delete all</a>

    <table class="table table-responsive table-bordered table-stripped">
      <thead>
        <tr>
          <th>Category</th>
          <th>Date</th>
          <th>Description</th>
          <th>Amount</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($Incomes as $Income)
        <tr>
          <td>{{ $Income->CategoryName }}</td>
          <td>{{ $Income->IncomeDate }}</td>
          <td>{{ $Income->Description }}</td>
          <td>{{ $Income->Amount }}</td>
          <td>
            <a href="/income/{{ $Income->id }}/edit" class="btn btn-warning">Edit</a>
            <a href="/income/{{ $Income->id }}/delete" class="btn btn-danger">Delete</a>


          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection