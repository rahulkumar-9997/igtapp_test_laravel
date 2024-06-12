<?php
namespace App\Http\Controllers\Backend;
//namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return view('backend.employee.index');
    }
    public function create(){
        return view('backend.employee.add');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'address' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
       
        Employee::create([
            'employee_name' => $request->name,
            'employee_father_name' => $request->father,
            'employee_mother_name' => $request->mother,
            'employee_address' => $request->address,
        ]);
  
        return response()->json(['success' => 'Employee created successfully.']);
    }

    public function show($id){
        $employee = Employee::find($id);
        if (is_null($employee)) {
        return $this->sendError('Employee not found.');
        }
        $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
        return response()->json([
            "success" => true,
            "message" => "Employee retrieved successfully.",
            "token" =>$token,
            "data" => $employee
        ]);
    }
    
}
