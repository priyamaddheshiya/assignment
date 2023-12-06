<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\Hirer;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showRegistrationForm()
    {
        return view('register');
    }
   public function create(Request $request){
    $request->validate([
      
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone'=> 'required|string',
            'security_question' => 'required',
            'your_answer'=> 'required',
            'gender'=> 'required',
            'email'=> 'required',
           'password' => 'required|min:6', 
         'confirm_password' => 'required|same:password',
        ]);

           $employee = new employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->phone = $request->phone;  
        $employee->security_question = $request->security_question;
        $employee->your_answer = $request->your_answer;
        $employee->gender = $request->gender;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->confirm_password = $request->confirm_password;
        $employee->save();
       return redirect()->route('register')->with('success', 'Employee Created Successfully!.');
       
}

  public function createHirer(Request $request){
    $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone'=> 'required|string',
            'security_question' => 'required',
            'your_answer'=> 'required',
            
            'email'=> 'required',
           'password' => 'required|min:6', 
         'confirm_password' => 'required|same:password',
        ]);

           $hirer = new Hirer();
        $hirer->first_name = $request->first_name;
        $hirer->last_name = $request->last_name;
        $hirer->phone = $request->phone;  
        $hirer->security_question = $request->security_question;
        $hirer->your_answer = $request->your_answer;
        
        $hirer->email = $request->email;
        $hirer->password = $request->password;
        $hirer->confirm_password = $request->confirm_password;
        $hirer->save();
       return redirect()->route('register')->with('success', 'Employee Created Successfully!.');
       
}

}