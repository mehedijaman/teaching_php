<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\Expense;
use App\Models\ExpenseCategory;

class ReportController extends Controller
{

    public function index()
    {
        return view('report');
    }

    public function incomeReport()
    {
        $IncomeCategories = IncomeCategory::all();
        return view('income.report.index',compact('IncomeCategories'));
    }

    public function generateIncomeReport($request)
    {   
        if (is_null($request->CategoryID)) 
        {
            $Incomes = Income::select('incomes.*','income_categories.Name as Category')
            ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')
            ->whereBetween('IncomeDate',[$request->DateFrom,$request->DateTo])
            ->get();

            return $Incomes;
        } 

        $Incomes = Income::select('incomes.*','income_categories.Name as Category')
        ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')
        ->where('CategoryID',$request->CategoryID)
        ->whereBetween('IncomeDate',[$request->DateFrom,$request->DateTo])
        ->get();


        return $Incomes;
    }

    public function printIncomeReport(Request $request)
    {
        $Incomes = $this->generateIncomeReport($request);
        $TotalIncome = $Incomes->sum('Amount');

        return view('income.report.print',compact('Incomes','TotalIncome'));
    }

    public function generateExpenseReport($request)
    {
        if (is_null($request->CategoryID)) {
            $Expenses = Expense::select('expenses.*','expense_categories.Name as Category')
            ->leftJoin('expense_categories','expenses.CategoryID','=','expense_categories.id')
            ->whereBetween('ExpenseDate',[$request->DateFrom,$request->DateTo])
            ->get();

            return $Expenses;
        }

        $Expenses = Expense::select('expenses.*','expense_categories.Name as Category')
        ->leftJoin('expense_categories','expenses.CategoryID','=','expense_categories.id')
        ->where('CategoryID',$request->CategoryID)
        ->whereBetween('ExpenseDate',[$request->DateFrom,$request->DateTo])
        ->get();

        return $Expenses;
    }

    public function printExpenseReport(Request $request)
    {
        $Expense = $this->generateExpenseReport($request);
        $TotalExpense = $Expenses->sum('Amount');

        return view('expense.report.print',compact('Expenses','TotalExpense'));
    }

    public function allReport()
    {
        return view('report_all');
    }

    public function printAllreport(Request $request)
    {
        $Incomes = $this->generateIncomeReport($request);
        $TotalIncome = $Incomes->sum('Amount');

        $Expenses = $this->generateExpenseReport($request);
        $TotalExpense = $Expenses->sum('Amount');

        return view('report_print',compact(
            'Incomes',
            'TotalIncome',
            'Expenses',
            'TotalExpense'
        ));
    }
}
