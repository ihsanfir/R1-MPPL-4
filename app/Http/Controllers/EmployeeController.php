<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
use Excel;
use App\Exports\EmployeeExport;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee', [
            "title" => "Employee",
            "data" => Employee::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeeAdd',[
            "title" => "Add Employee"
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
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'salary' => $request->salary,
            'bonus' => $request->bonus,
            'role' => $request->role,
        ]);
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employeeDetail',[
            "title" => "Detail Employee",
            "data" => Employee::find($id)
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
        return view('employeeEdit',[
            "title" => "Edit Employee",
            "data" => Employee::find($id)
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
        $email = $request->input('email');
        $salary = $request->input('salary');
        $bonus = $request->input('bonus');
        $role = $request->input('role');
        $Employee = Employee::find($id);
        $Employee->name = $name;
        $Employee->email = $email;
        $Employee->salary = $salary;
        $Employee->bonus = $bonus;
        $Employee->role = $role;
        $Employee->save();
        /*
        Employee::where('id', $id)
                ->update(['salary'=>$salary],['role'=>$role]);*/
        return view('employeeDetail',[
            "title" => "Detail Employee",
            "data" => Employee::find($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('/employee');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $data = Employee::where('name','LIKE','%'.$search.'%')
                ->orWhere('email','LIKE','%'.$search.'%')
                ->orWhere('role', 'LIKE', '%'.$search.'%')
                ->paginate(15);
        $data->appends(['search'=>$search]);

        return view('employee',[
            "title" => "Employee",
            "data" => $data
        ]);
    }

    public function pdf() {
        $employees = Employee::all();
 
    	$pdf = PDF::loadview('pdf.employee',['employees'=>$employees]);
        return $pdf->stream();
    }

    public function excel() {
        return Excel::download(new EmployeeExport, 'employees.xlsx');
    }
}
