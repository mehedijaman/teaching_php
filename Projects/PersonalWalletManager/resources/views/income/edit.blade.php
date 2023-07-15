@extends('layouts.master')
@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Income</h1>
    </div>
    <a href="/income" class="btn btn-primary"><< Back to List</a>

    {{ Form::open(['url' => 'income/update','class' => 'form-horizontal']) }}
      <input type="hidden" name="id" value="{{ $Income->id }}">
      <div class="form-group">
        <label for="Category" class="control-label col-md-4">Income Category</label>
        <div class="col-md-4">
          <select name="CategoryID" id="CategoryID" class="form-control">
            <option value="">Select Category</option>
            @foreach($IncomeCategories as $Category)
              @if($Income->CategoryID == $Category->id)
                <option value="{{ $Category->id }}" selected>{{ $Category->Name }}</option>
              @else
                <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
              @endif
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="Amount" class="control-label col-md-4">Amount</label>
        <div class="col-md-4">
          <input type="number" class="form-control" name="Amount" value="{{ $Income->Amount }}">
        </div>
      </div>

      <div class="form-group">
        <label for="Description" class="control-label col-md-4">Description</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="Description" value="{{ $Income->Description }}">
        </div>
      </div>

      <!-- <div class="form-group">
        <label for="IncomeDate" class="control-label col-md-4">IncomeDate</label>
        <div class="col-md-4">
          <input type="date" class="form-control" name="IncomeDate">
        </div>
      </div> -->

      <div class="form-group">
        <input type="submit" name="submit" value="Update Income" class="btn btn-primary">
      </div>
    {{ Form::close() }}
  </main>
@endsection