<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use PDF;
use Excel;
use App\Exports\ProductExport;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::join('categories', 'categories.id', '=', 'products.id_category' )
                            ->join('suppliers', 'suppliers.id', '=', 'products.id_supplier')
                            ->orderBy('id', 'DESC')
                            ->paginate(15,['products.*', 'categories.name as category', 'suppliers.name as supplier']);
        return view('product', [
            "title" => "Product",
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all(['id','name']);
        $supplier = Supplier::all(['id', 'name']);
        return view('productAdd',[
            "title" => "Add Product",
            "categories" => $category,
            "suppliers" => $supplier
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'id_category' => $request->id_category,
            'id_supplier' => $request->id_supplier
        ]);
        return redirect('/product');
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
        $category = Category::all(['id','name']);
        $supplier = Supplier::all(['id', 'name']);
        $data = Product::find($id);
        return view('productEdit', [
            "title" => "Product",
            "data" => $data,
            "categories" => $category,
            "suppliers" => $supplier
        ]);
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
        $name = $request->input('name');
        $price = $request->input('price');
        $stock = $request->input('stock');
        $id_category = $request->input('id_category');
        $id_supplier = $request->input('id_supplier');
        $Product = Product::find($id);
        $Product->name = $name;
        $Product->price = $price;
        $Product->stock = $stock;
        $Product->id_category = $id_category;
        $Product->id_supplier = $id_supplier;
        $Product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect("/product");
    }

    public function pdf() {
        $products = Product::join('categories', 'categories.id', '=', 'products.id_category' )
                            ->join('suppliers', 'suppliers.id', '=', 'products.id_supplier')
                            ->orderBy('id', 'DESC')
                            ->get(['products.*', 'categories.name as category', 'suppliers.name as supplier']);
 
    	$pdf = PDF::loadview('pdf.product',['products'=>$products]);
        return $pdf->stream();
    }

    public function excel() {
        return Excel::download(new ProductExport, 'products.xlsx');
    }
}
