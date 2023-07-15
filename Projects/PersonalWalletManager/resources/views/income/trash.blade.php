@extends('layouts.master')
@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Income Trash</h1>
    </div>
    <a href="/income" class="btn btn-primary"><< Back to List</a>
    <a href="/income/restore" class="btn btn-info">Restore All</a>
    <a href="/income/delete/parmanently" class="btn btn-info">Empty Trash</a>

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
        @foreach($TrashedIncomes as $Income)
        <tr>
          <td>{{ $Income->Category }}</td>
          <td>{{ $Income->IncomeDate }}</td>
          <td>{{ $Income->Description }}</td>
          <td>{{ $Income->Amount }}</td>
          <td>
            <a href="/income/{{ $Income->id }}/delete/parmanently" class="btn btn-danger">Parmanently Delete</a>

            <a href="/income/{{ $Income->id }}/restore" class="btn btn-success">Restore</a>


          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection