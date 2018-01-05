<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChitGroup;


class MyRegistorController extends Controller
{
    protected $chit_groups;
   

    public function __construct(ChitGroup $chit_groups)
    {
        $this->chit_groups = $chit_groups;
      
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function myRegistorIndex()
    {
        return view('registor.my-registor-index');
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
            
            return view('scheme.add-customers-to-chit',compact('customers', 'chit_group'));
    }

    public function mapMembersToChit(Request $request)
    {
          dd($request->all());
    }
}
