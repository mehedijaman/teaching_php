<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;
use App\Models\Income;
use App\Models\ExpenseCategory;
use App\Models\Expense;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->SearchOption == 'Income')
        {

            $Result = Income::select(
                'incomes.Amount',
                'incomes.Description',
                'incomes.IncomeDate',
                'income_categories.Name as IncomeCategory'
            )
            ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')
            ->where('income_categories.Name','LIKE','%'.$request->SearchContent.'%')
            ->get();
        }
        else{
            $Result = Expense::select(
                'expenses.Amount',
                'expenses.Description',
                'expenses.ExpenseDate',
                'expense_categories.Name as ExpenseCategory'
            )
            ->leftJoin('expense_categories','expenses.CategoryID','=','expense_categories.id')
            ->where('expense_categories.Name','LIKE','%'.$request->SearchContent.'%')
            ->get();
        }
    }
}
