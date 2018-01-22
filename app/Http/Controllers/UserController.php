<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Branch;
use Validator;

class UserController extends Controller
{
    
    protected $users;
    protected $branch;

    public function __construct(User $users, Branch $branch)
    {
        $this->users = $users;
        $this->branch = $branch;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getBranches = $this->branch->getBranches();
        $users_list = $this->users->get();

        return view('settings.user-index', compact('getBranches', 'users_list'));
    }

    public function userInsertAndUpdate(Request $request, $id="")
    {
        

       if($id) {
            $input = $request->all();
            
            $validator = Validator::make($request->all(), 
                [
                        "first_name" => "required",
                        "last_name" => "required",                      
                        "employee_code" => "required",
                        "employee_role" => "required",
                        "branch" => "required",
                        "email" => "required",
                        "employee_contact_no" => "required",                   
                ]
            );
            if ($validator->fails())
            {
                return redirect('user/index')->with('error', 'Details not submitted');
            }
        
            $this->users->find($id)->update($input);            
            return redirect('user/index')->with('success', 'Updated Succcessfully');
        } else {
            $input = $request->all();            
            $input['password' ] = bcrypt('123456');    
            $validator = Validator::make($request->all(), 
                [
                    "first_name" => "required",
                        "last_name" => "required",                      
                        "employee_code" => "required",
                        "employee_role" => "required",
                        "branch" => "required",
                        "email" => "required|unique:users,email",
                        "employee_contact_no" => "required",                   
                ]
            );
            if ($validator->fails())
            {
                return redirect('user/index')->with('error', 'Details not submitted');
            }        

            $this->users->create($input);
           return redirect('user/index')->with('success', 'Updated Succcessfully');
    }
}

    public function chitUserEdit(Request $request) {

        $user_id = $request->user_id;        
        $branches = $this->branch->getBranches();
        $result = $this->users->find($user_id);        
        return view('settings.user-edit',compact('branches','result'))->render();
    }


    public function chitUserDelete(Request $request) {

            $user_id = $request->user_id; // can pass array of ids to delete
            $result = $this->users->where('id', $user_id)->delete();
            return response()->json('deleted');
    }

}
