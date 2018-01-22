<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Validator;
use App\User;

use App\Models\Branch;

use App\Models\Bank;


class SettingsController extends Controller
{
    
    protected $users;
    protected $branch;
    protected $bank;

    public function __construct(User $users, Branch $branch, Bank $bank)
    {
        $this->users = $users;
        $this->branch = $branch;
        $this->bank = $bank;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function branchIndex()
    {
        $getBranches = $this->branch->getBranches();
        $branches = $this->branch->get();

        $users = $this->users->get();        
        //return view('settings.common-settings', compact('getBranches', 'branches', 'users'));
        return view('settings.branch-index', compact('getBranches', 'branches', 'users'));
    }

    public function branchInsertAndUpdate(Request $request, $id="")
    {

        
        if($id) {
            $input = $request->all();          
            $validator = Validator::make($request->all(), 
                [
                 
                    "branch_name" => "required",
                    "branch_code" => "required",
                    "branch_city" => "required",
                    "branch_mail" => "required",
                    "branch_contact_no" => "required",
                    "branch_address" => "required",             
                ]
            );
            if ($validator->fails())
            {
                return redirect('branch/index')->with('error', 'Details not submitted');
            }
        
            $this->branch->find($id)->update($input);            
            return redirect('branch/index')->with('success', 'Updated Succcessfully');
        } else {
            $input = $request->all();
            
            $validator = Validator::make($request->all(), 
                [
                    
                         "branch_name" => "required",
                    "branch_code" => "required",
                    "branch_city" => "required",
                    "branch_mail" => "required",
                    "branch_contact_no" => "required",
                    "branch_address" => "required",                   
                ]
            );
            if ($validator->fails())
            {
                return redirect('branch/index')->with('error', 'Details not submitted');
            }        

            $this->branch->create($input);
            return redirect('branch/index')->with('success', 'Updated Succcessfully');

        }
    }



   public function branchEdit(Request $request) {

        $branch_id = $request->branch_id;

        $result = $this->branch->find($branch_id);        
        
        return view('settings.branch-edit',compact('result'))->render();
    }


    public function branchDelete(Request $request) {

            $branch_id = $request->branch_id; // can pass array of ids to delete
            $result = $this->branch->where('branch_id', $branch_id)->delete();
            return response()->json('deleted');
   }


    public function bankIndex() {

        $banks = $this->bank->get();

        return view('settings.bank-index',compact('banks'));
    }

    public function bankInsertAndUpdate(Request $request, $id="")
    {
        
        if($id) {
            $input = $request->all();          
            $validator = Validator::make($request->all(), 
                [
                 
                    "bank_name" => "required",
                    "account_no" => "required",
                    "ifsc" => "required",
                    "branch" => "required",                  
                ]
            );
            if ($validator->fails())
            {
                return redirect('bank/index')->with('error', 'Details not submitted');
            }
        
            $this->bank->find($id)->update($input);            
            return redirect('bank/index')->with('success', 'Updated Succcessfully');
        } else {
            $input = $request->all();
            
            $validator = Validator::make($request->all(), 
                [
                    
                    "bank_name" => "required",
                    "account_no" => "required",
                    "ifsc" => "required",
                    "branch" => "required",                  
                ]
            );
            if ($validator->fails())
            {
                return redirect('bank/index')->with('error', 'Details not submitted');
            }        

            $this->bank->create($input);
            return redirect('bank/index')->with('success', 'Updated Succcessfully');

        }
    }




        public function bankEdit(Request $request) {

        $bank_id = $request->bank_id;
        $result = $this->bank->find($bank_id);        
        return view('settings.bank-edit',compact('result'))->render();
    }


    public function bankDelete(Request $request) {

            $bank_id = $request->bank_id; // can pass array of ids to delete
            $result = $this->bank->where('bank_id', $bank_id)->delete();
            return response()->json('deleted');
   }


}
