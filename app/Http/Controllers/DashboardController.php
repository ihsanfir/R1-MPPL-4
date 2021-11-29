<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expanse;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Employee;
use App\Models\Category;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $countOfCategory = [];
        
        $products = Product::orderby('id','desc')->with('product_supplier')->get();
        $totalProduct = Product::count();
        $totalSupplier = Supplier::count();
        $totalEmployee = Employee::count();
        $totalCategory = Category::count();
        $nameOfCategory = Category::pluck('name')->toArray();
        
        foreach ($nameOfCategory as $key=>$n) {
            $totalCat = Category::find($key+1)->products()->count();
            array_push($countOfCategory, $totalCat);
        }

        $income = Income::select(
            DB::raw('sum(amount) as sums'), 
            DB::raw("DATE_FORMAT(date,'%M %Y') as months"))
                ->groupBy('months')
                ->orderBy('date')
                ->get();
        //dd($income);
        $expanse = Expanse::select(
            DB::raw('sum(amount) as sums'), 
            DB::raw("DATE_FORMAT(date,'%M %Y') as months"))
                ->groupBy('months')
                ->orderBy('date')
                ->get(['sums']);
        
        $expanse = $expanse->toArray();
        $income = $income->toArray();
        //dd($expanse);

        if(count($expanse) > count($income)){
            foreach($expanse as $expens){
                $label[] = $expens['months'];
            }
        } else {
            foreach($income as $incomess){
                $label[] = $incomess['months'];
            }
        }
        foreach($income as $incom){
            $incomes[] = $incom['sums'];
        }

        foreach($expanse as $expans){
            $expanses[] = $expans['sums'];
        }
        //dd($incomes, $expanses, $label);
        return view('dashboard', [
            "title" => "Dashborad",
            "label" => $label,
            "incomes" => $incomes,
            "expanses" => $expanses,
            "totalProduct" => $totalProduct,
            "totalSupplier" => $totalSupplier,
            "totalEmployee" => $totalEmployee,
            "totalCategory" => $totalCategory,
            "products" => $products,
            "nameOfCategory" => $nameOfCategory,
            "countOfCategory" => $countOfCategory
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
