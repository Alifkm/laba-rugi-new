<?php

namespace App\Http\Controllers;

use Datatables;
use App\Models\Employee;
use App\Models\PositionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $employee = Employee::all();
        if($request->ajax()) {                        
            return datatables()->of($employee)
            ->addColumn('action', function($employee){
                if(auth()->user()->adminType->admin_type_name === "superAdmin") {
                    $actionBtn =
                        '<div class = "d-flex justify-content-center">
                        <a href="/employee/'.$employee->id.'/edit" id="'.$employee->id.'" class="edit btn btn-outline-success btn-sm btn-action">Detail</a>
                        </div>';    
                } else {
                    $actionBtn =
                        '<div class = "d-flex justify-content-center">
                            <a href="/employee/'.$employee->id.'/edit" id="'.$employee->id.'" class="edit btn btn-outline-success btn-sm btn-action">Edit</a>
                            <a href="javascript:void(0)" id="'.$employee->id.' '.$employee->name.'" data-toggle="tooltip" data-original-title="Delete"  class="delete btn btn-outline-danger btn-sm btn-action mx-1">delete</a>
                        </div>';
                }

                
                    
                return $actionBtn;
            })
            ->addColumn('position', function($employee) {

                return $employee->position->position_name;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
          }
          
          return view('employee.index', [
            'user' => auth()->user()->adminType->admin_type_name
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
        return view('employee.create', [
            'positions' => PositionType::all()
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
        //
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['email', 'unique:employees', 'nullable'],
            'phone' => ['regex:/^([0-9\s\-\+\(\)]*)$/', 'max:12', 'min:10', 'nullable'],
            'gender' => 'required',
            'position' => 'required',
            'age' => ['integer', 'nullable'],
        ]); 

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'position_type_id' => $request->position,
            'age' => $request->age,
            'address' => $request->address
        ]);


        return redirect('/employee')->with('message', 'Employee ' . $formFields['name'] . ' created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('employee.edit', [
            'employee' => $employee,
            'positions' => PositionType::all(),
            'user' => auth()->user()->adminType->admin_type_name
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['email', 'unique:employees', 'nullable'],
            'phone' => ['regex:/^([0-9\s\-\+\(\)]*)$/', 'max:12', 'min:10', 'nullable'],
            'gender' => 'required',
            'position' => 'required',
            'age' => ['integer', 'nullable'],
        ]); 

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'position_type_id' => $request->position,
            'age' => $request->age,
            'address' => $request->address
        ]);
        
        return redirect('/employee')->with('message', 'Employee ' . $formFields['name'] . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect('/employee')->with('message', 'Employee ' . $employee['name'] . ' deleted successfully!');  
    }
}
