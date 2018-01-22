<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

use App\Models\Branch;


class SettingsController extends Controller
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
    public function branchIndex()
    {
        $getBranches = $this->branch->getBranches();
        $branches = $this->branch->get();

        $users = $this->users->get();
        // dd($users);
        return view('settings.common-settings', compact('getBranches', 'branches', 'users'));
    }

    public function branchInsertAndUpdate(Request $request)
    {
        $input = $request->all();
        $this->branch->create($input);
        echo "success";
    }
}
