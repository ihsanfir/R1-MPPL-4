<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use PDF;
use Excel;
use App\Exports\SupplierExport;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.index', [
            "title" => "Suppliers",
            "data" => Supplier::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.add',[
            "title" => "Add Supplier"
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
        Supplier::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'email' => $request->email
        ]);
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('supplierDetail',[
            "title" => "Detail supplier",
            "data" => Supplier::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('supplier.edit',[
            "title" => "Edit Supplier",
            "data" => Supplier::find($id)
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
        $no_hp = $request->input('no_hp');
        $email = $request->input('email');
        $Supplier = Supplier::find($id);
        $Supplier->name = $name;
        $Supplier->no_hp = $no_hp;
        $Supplier->email = $email;
        $Supplier->save();
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect('/supplier');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $data = Supplier::where('name','LIKE','%'.$search.'%')
                ->orWhere('email','LIKE','%'.$search.'%')
                ->paginate(5);
        $data->appends(['search'=>$search]);
        return view('supplier.index',[
            "title" => "Supplier",
            "data" => $data
        ]);
    }

    public function pdf() {
        $suppliers = Supplier::all();
 
    	$pdf = PDF::loadview('pdf.supplier',['suppliers'=>$suppliers])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function excel() {
        return Excel::download(new SupplierExport, 'suppliers.xlsx');
    }
}
