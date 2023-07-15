@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Total Report</h1>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <table class="table table-responsive table-bordered table-stirpped table-condensed">
            <thead>
              <tr>
                <th colspan="4" class="text-center">Income</th>
              </tr>
              <tr>
                <th>Category</th>
                <th>Description</th>
                <th>Date</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Incomes as $Income)
              <tr>
                <th>{{ $Income->Category }}</th>
                <th>{{ $Income->Description }}</th>
                <th>{{ $Income->IncomeDate }}</th>
                <th>{{ $Income->Amount }}</th>
              </tr>
              @endforeach
            </tbody>

            <tfoot>
              <tr>
                <th colspan="3">Total Income</th>
                <th>{{ $TotalIncome }}</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
          <table class="table table-responsive table-bordered table-stirpped table-condensed">
            <thead>
              <tr>
                <th colspan="4" class="text-center">Expense</th>
              </tr>
              <tr>
                <th>Category</th>
                <th>Description</th>
                <th>Date</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Expenses as $Expense)
              <tr>
                <th>{{ $Expense->Category }}</th>
                <th>{{ $Expense->Description }}</th>
                <th>{{ $Expense->ExpenseDate }}</th>
                <th>{{ $Expense->Amount }}</th>
              </tr>
              @endforeach
            </tbody>

            <tfoot>
              <tr>
                <th colspan="3">Total Expense</th>
                <th>{{ $TotalExpense }}</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-xs-4 offset-xs-4">
          <table class="table table-responsive table-bordered table-stirpped">
            <thead>
              <tr>
                <th>Total Income</th>
                <th>{{ $TotalIncome }}</th>
              </tr>
              <tr>
                <th>Total Expense</th>
                <th>{{ $TotalExpense }}</th>
              </tr>
              <tr>
                <th>Rest Amount</th>
                <th>{{ $TotalIncome - $TotalExpense }}</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>

      <button type="button" onclick="window.print()">Print</button>
      
    </main>
@endsection