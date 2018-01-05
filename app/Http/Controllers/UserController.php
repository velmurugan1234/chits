<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Branch;

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
       
        return view('settings.user-index', compact('getBranches'));
    }

    public function userInsertAndUpdate(Request $request)
    {
        // dd($request->all());

       $input = $request->all();
       $input['password' ] = bcrypt('123456');
       $this->users->create($input);
    }
}
