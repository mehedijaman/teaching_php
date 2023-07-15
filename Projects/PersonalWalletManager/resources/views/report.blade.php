@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Report</h1>
      </div>

      <a href="/report/income" class="btn btn-primary">Income Report</a>
      <a href="/report/expense" class="btn btn-success">Expense Report</a>
      <a href="/report/all" class="btn btn-info">All Report</a>
    </main>
@endsection 