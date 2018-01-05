<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $users;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

      public function __construct(User $users)
      {
            $this->middleware('auth');
            $this->users = $users;
            
      }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {
            return view('home');
      }

      public function setTheme(Request $request) {

            $user_id = $request->user_id;
            $theme_id = $request->theme_id;

            $this->users->setTheme($user_id, $theme_id);
            $message = session()->put('success', 'Theme changed successfully');
            return response()->json($message);

      }
}
