<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\employeeRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Employee;
use App\Models\Service;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class   EmployeeController extends BaseController
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getEmployee()
    {
        $employee=Employee::all();
        return view('Employee.Employees',compact('employee'));
    }

    public function Create()
    {
        return view('Employee.AddEmployee');
    }
    public function store(employeeRequest $request)
    {
        // $employee = auth('sanctum')->user();
        // if ($employee->role != Constants::ADMIN_ID) {
        //     return $this->sendError('you do not have permissions');
        // } else {
            // return $request->all();
            $data = $request->all();

        $data['password'] = Hash::make($request->password);
        $User = User::create($data);
        $Employee = Employee::create([
            'name'=>$User->name,
            'user_id' => $User->id,
            'phone' =>$request->phone,
            'address' =>$request->address,
            'description' =>$request->description,
            'department_id' =>$request->department_id,
        ]);


            $Employee->save();
        return view('home');
        }

    public function login(LoginRequest $request)
    {

        $employee = Employee::where('email', $request['email'])->first();

        if (!$employee || !Hash::make($request->password) == $employee->password) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        if ($employee) {
            // return view('home', compact('employee'));
            return view('login');
        }
        // $token = $employee->createToken('auth_token')->plainTextToken;
        // return response()->json([
        //     'user' => $employee,
        //     'access_token' => $token,
        // ]);
    }

    public function update(employeeRequest $request, $id)
    {
        $employee = auth('sanctum')->user();
        if ($employee->role != Constants::ADMIN_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            $varEmployee = Employee::find($id);

            $varEmployee->name = $request->name;
            $varEmployee->email = $request->email;
            $varEmployee->phone = $request->phone;
            $varEmployee->address = $request->address;
            $varEmployee->password = $request->password;
            $varEmployee->isAdmin = $request->isAdmin;
            $varEmployee->description = $request->description;
            $varEmployee->department_id = $request->department_id;

            $varEmployee->save();

            return $this->sendResponse($varEmployee, 'employee Updated seccesfully');
        }
    }

    public function destroy($id)
    {
        $employee = auth('sanctum')->user();
        if ($employee->role != Constants::ADMIN_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            $varEmployee = Employee::find($id);

            $varEmployee->delete();
            return $this->sendResponse($varEmployee, 'employee deleted seccesfully');
        }
    }

    public function employeeSearch(Request $request)
    {
        if ($request->search_value != null) {
            $result = $this->search(new Employee(), ['name', 'email', 'phone', 'description'], $request->search_value);
            return $this->sendResponse($result, 'done');
        }
    }
}
