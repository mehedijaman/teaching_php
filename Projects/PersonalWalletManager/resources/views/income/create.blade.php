@extends('layouts.master')
@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add New Income</h1>
    </div>
    <a href="/income" class="btn btn-primary"><< Back to List</a>

    {{ Form::open(['url' => 'income','class' => 'form-horizontal','id' => 'IncomeStoreForm']) }}
      <div class="form-group">
        <label for="Category" class="control-label col-md-4">Income Category</label>
        <div class="col-md-4">
          <select name="CategoryID" id="CategoryID" class="form-control">
            <option value="">Select Category</option>
            @foreach($IncomeCategories as $Category)
            <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="Amount" class="control-label col-md-4">Amount</label>
        <div class="col-md-4">
          <input type="number" class="form-control" name="Amount" min="-2147483647" max="2147483647">
        </div>
      </div>

      <div class="form-group">
        <label for="Description" class="control-label col-md-4">Description</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="Description">
        </div>
      </div>

      <!-- <div class="form-group">
        <label for="IncomeDate" class="control-label col-md-4">IncomeDate</label>
        <div class="col-md-4">
          <input type="date" class="form-control" name="IncomeDate">
        </div>
      </div> -->

      <div class="form-group">
        <input type="submit" name="submit" value="Add Income" class="btn btn-primary">
        <button type="button" id="InsertText" class="btn btn-success">Insert Text</button>
        <button type="button" id="RemoveText" class="btn btn-success">Remove Text</button>
      </div>
      <div id="text-content"></div>
    {{ Form::close() }}
  </main>

  <script>
    // var name = prompt('Enter Your Name:');
    // alert(name);
    // console.log(name);

    // for(var counter = 0; counter <= 100; counter++)
    // {
    //   console.log(counter);
    // }

    // var number = 10;

    // if (number < 20) {
    //   console.log('Less than 20');
    // }
    // else
    // {
    //   console.log('Greater than 20');
    // }

    // var details = [
    //   {'name' : 'Mehedi Jaman'},
    //   {'location' : 'Khulna'},
    // ];

    // console.log(details);

    // document.getElementById('PressMe').onclick = function(){
    //   for(var counter = 0; counter <=100; counter++)
    //   {
    //     console.log(counter);
    //   }
    // }

    // document.getElementsByTagName('button').onclick = function(){
    //   document.getElementById('text-content').innerHTML = 'Hello World';
    // };

    // document.getElementsByTagName('button').onmouseout = function(){
    //   document.getElementById('text-content').innerHTML = '';
    // };

    // document.getElementById('RemoveText').onclick = function(){
    //   document.getElementById('text-content').innerHTML = '';
    // };

    $('#InsertText').on('click',function(){
      $('#text-content').html('Hello World');
    });

    $('#RemoveText').on('click',function(){
      $('#text-content').empty();
    });

    $('#IncomeStoreForm').on('submit',function(event){
      event.preventDefault();

      $.ajax({
        'type':'POST',
        'url' :'/income',
        'data' : $('#IncomeStoreForm').serializeArray(),
        success :function(data){
          console.log(data);
        },
        error : function(data){
          console.log(data);
        }
      });
    });

  </script>
@endsection