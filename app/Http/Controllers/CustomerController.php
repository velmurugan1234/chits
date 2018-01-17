<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    

      protected $customer;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct(Customer $customer)
      {
            $this->customer = $customer;
      }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {

            return view('customer.customer-index');
      }

      public function create()
      {
            return view('customer.add-edit-customer');
      }

      public function store(Request $request)
      {
            $input = $request->all();
            // dd($input);
            $this->customer->create($input);
      }
}
