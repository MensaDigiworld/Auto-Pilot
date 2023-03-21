<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeInfoController extends Controller
{
    public function index(){
          $employees=Employee::orderBy('id','desc')->paginate(10);
        return view('business_setup.list_employee',compact('employees'));
    }
   public function create(){
       return view('business_setup.add_employee');
   }
       public function store(Request $request)
    {
     Employee::saveOrUpdate($request);
        return redirect()->back()->with('success','Employee Added Successfully');
    }
   public function edit($id){
        $employee = Employee::findOrFail($id);
        return view('business_setup.edit_employee', compact('employee'));
   }
   public function update(Request $request, $id){
       Employee::saveOrUpdate($request, $id);
        return redirect()->back()->with('success',' Employee Update Successfully');
   }
    public function destroy($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->back()->with('error', 'Employee is successfully deleted');
    }
}
