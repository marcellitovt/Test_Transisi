<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employe;

class EmployeeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_employee = Employe::simplePaginate(5);
        $data_company = Company::all();
        return view('employee.index', compact('data_employee','data_company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_company = Company::all();
        return view('employee.create', compact('data_company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' =>'required',
            'id_company' =>'required',
            'email' =>'required'
        ]);
        $employee = new Employe;
        $employee->name = $request->name;
        $employee->id_company = $request->id_company;
        $employee->email = $request->email;
        $employee->save();

        return redirect()->route('employee.index')
                        ->with('success','Data stored successfully.');
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
        $employee = Employe::find($id);
        $data_company = Company::all();
        return view('employee.edit',compact('employee','id','data_company'));
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
        $employee = Employe::find($id);

        $this->validate(request(),[
            'name' =>'required',
            'id_company' =>'required',
            'email' =>'required'
        ]);
        $employee->name = $request->get('name');
        $employee->id_company = $request->get('id_company');
        $employee->email = $request->get('email');
        $employee->save();
        return redirect('employee')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employe::find($id);
        $employee->delete();
        return redirect('employee')->with('success','data berhasil di hapus'); 
    }
}
