<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChitGroup;
use App\Models\ChitScheme;
use App\Models\Branch;
use App\Models\Customer;
use App\Models\ChitMember;
use Auth;

class SchemeController extends Controller
{
    protected $chit_groups;
    protected $chit_schemes;
    protected $chit_member;
    protected $branch;
    protected $customer;

    public function __construct(ChitMember $chit_member, ChitGroup $chit_groups, ChitScheme $chit_schemes, Branch $branch, Customer $customer)
    {
        $this->chit_groups = $chit_groups;
        $this->chit_member = $chit_member;
        $this->chit_schemes = $chit_schemes;
        $this->branch = $branch;
        $this->customer = $customer;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function schemeIndex()
    {
        $result = $this->chit_schemes->get();
        return view('scheme.chit-scheme-index', compact('result'));
    }

    public function chitSchemeInsertAndUpdate(Request $request)
    {
        $input = $request->all();
        $this->chit_schemes->create($input);

    }

    public function chitGroupindex()
    {
        $branches = $this->branch->getBranches();
        $schemes = $this->chit_schemes->getChitSchemes();
        $chit_groups = $this->chit_groups->get();
        $branch = $this->branch;
        $scheme = $this->chit_schemes;
//
        return view('scheme.chit-group-index', compact('branches', 'schemes', 'chit_groups', 'branch', 'scheme'));
    }

    public function chitGroupInsertAndUpdate(Request $request)
    {
        $input = $request->all();
        $this->chit_groups->create($input);
        return redirect()->route('chit-group-index');
    }

    public function chitMapping()
    {
        $result = $this->chit_groups->get();
        return view('scheme.chit-mapping',compact('result'));
    }

    public function mapCustomersToGroup($chit_group_id)
    { 
            $customers = $this->customer->pluck('applicant_name', 'customer_id');

            $chit_group = $this->chit_groups->find($chit_group_id);

            $chit_mem = $this->chit_member
                                ->select('chit_members.*','customers.applicant_name','chit_groups.chit_group_ticket_no')
                                ->leftjoin("customers","chit_members.customer_id","=","customers.customer_id")
                                ->leftjoin("chit_groups","chit_members.chit_group_id","=","chit_groups.chit_group_id")
                                ->orderBy('ticket_no', 'asc')
                                ->where('chit_members.chit_group_id',$chit_group_id)
                                ->get();
                                $re_id = $chit_group_id;

            return view('scheme.add-customers-to-chit',compact('customers', 'chit_group','chit_mem','re_id'));
    }

    public function mapMembersToChit(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $insert_value_array = array(); 
        if(isset($input['customer_id'])) {

            foreach($input['customer_id'] as $data_key => $value) {

                  $insert_value_array['customer_id'] = $value;
                  $insert_value_array['chit_group_id'] = $request->re_id;
                  $insert_value_array['ticket_no'] = $input['ticket_no'][$data_key];
                  $insert_value_array['lot_preference'] = $input['lot_preference'][$data_key];
                  $this->chit_member->create($insert_value_array);

                  $result = $this->chit_groups->find($request->re_id);
                  $result->members_count = $result->members_count + 1;
                  $result->save();
            }
                           
        }

        if(!empty($input['chit_mem_id'])) {

            foreach($input['chit_mem_id'] as $data_key => $value) {

                  $insert_value_array['customer_id'] = $input['customer_id_update'][$data_key];

                  $insert_value_array['chit_group_id'] = $request->re_id;
                  $insert_value_array['ticket_no'] = $input['ticket_no_update'][$data_key];
                  $insert_value_array['lot_preference'] = $input['lot_preference_update'][$data_key];

                  $this->chit_member->find($value)->update($insert_value_array);
                  
            }

        }

        if(empty($input['customer_id_update'])) {
            session()->put('success','Created successfully.'); 
        } else {
            session()->put('info','Updated successfully.');
        }           
    
        return redirect('/map/customers/to/group/'.$request->re_id);
      }

      public function mappedChitGroups()
      {
            $result = $this->chit_groups->where('members_count', 20)->get();
            return view('scheme.mapped-chit-groups',compact('result'));
      }

      public function approveChitGroups(Request $request)
      {
           
            $this->chit_groups->find($request->chit_group_id)->update(['is_approve' => 1]);
            return Response()->json();
      }
}

