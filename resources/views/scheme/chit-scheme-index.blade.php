@extends('layouts.app')

@section('title', 'Scheme')

@section('content')

<section id="content">

<div class="page page-fullwidth-layout">

<div class="pageheader">



<div class="page-bar">

<ul class="page-breadcrumb">
    <li>
        <a href="index.html"><i class="fa fa-home"></i> SathyChits</a>
    </li>
    <li>
        <a href="#">Chit Type</a>
    </li>
    <li class="active">
        <a href="">Schemes</a>
    </li>
</ul>

</div>

</div>

<div class="row">
    <!-- col -->
    <div class="col-md-12">


        <!-- tile -->
        <section class="tile">

            <!-- tile header -->
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Customers</strong></h1>
                <ul class="controls">
                	
                    <li>
                        <a data-toggle="modal" data-target="#myModal2" role="button" tabindex="0" id="add-entry">
                            <i class="fa fa-plus mr-5"></i> Add Scheme</a>
                    </li>
                    <li class="dropdown">
                    	

                        <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                            <i class="fa fa-spinner fa-spin"></i>
                        </a>

                        <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                            <li>
                                <a role="button" tabindex="0" class="tile-toggle">
                                    <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                    <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0" class="tile-refresh">
                                    <i class="fa fa-refresh"></i> Refresh
                                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0" class="tile-fullscreen">
                                    <i class="fa fa-expand"></i> Fullscreen
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li> -->

                </ul>
            </div>
            <!-- /tile header -->

            <!-- tile widget -->
            <div class="tile-widget">

                <div class="row">

                    <div class="col-sm-5">
                        <select class="input-sm form-control inline w-sm">
                            <option value="0">Bulk action</option>
                            <option value="1">Delete selected</option>
                            <option value="2">Archive selected</option>
                            <option value="3">Copy selected</option>
                        </select>
                        <button class="btn btn-sm btn-default">Apply</button>
                    </div>

                    <div class="col-sm-3"></div>

                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search...">
                              <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                              </span>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /tile widget -->

            <!-- tile body -->
            <div class="tile-body p-0">

                <div class="table-responsive">
                    <table class="table mb-0" id="usersList">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0">
                                    <input type="checkbox" id="select-all"><i></i>
                                </label>
                            </th>
                            <th>Chit Value</th>
                            <th>Term</th>
                            <th>Members</th>
                            <th>Monthly</th>
                            <th>Weekly</th>
                            <th>Investment</th>
                            <th>Dividend</th>
                            <th>Avg Return</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $value)
                            <tr>
                                <td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                              
                                <td>{{ $value->chit_value }}</td>
                                <td>{{ $value->term }}</td>
                                <td>{{ $value->members }}</td>
                                <td>{{ $value->monthly_amount }}</td>
                                <td>{{ $value->weekly_amount }}</td>
                                <td>{{ $value->investment }}</td>
                                <td>{{ $value->dividend}}</td>
                                <td>{{ $value->average_return }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /tile body -->

            <!-- tile footer -->
            <div class="tile-footer dvd dvd-top">
                <div class="row">

                    <div class="col-sm-5 hidden-xs">
                        <select class="input-sm form-control w-sm inline">
                            <option value="0">Bulk action</option>
                            <option value="1">Delete selected</option>
                            <option value="2">Archive selected</option>
                            <option value="3">Copy selected</option>
                        </select>
                        <button class="btn btn-sm btn-default">Apply</button>
                    </div>

                    <div class="col-sm-3 text-center">
                        <small class="text-muted">showing 20-30 of 50 items</small>
                    </div>

                    <div class="col-sm-4 text-right">
                        <ul class="pagination pagination-sm m-0">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /tile footer -->

        </section>
        <!-- /tile -->

    </div>
    <!-- /col -->
</div>
</div>

</section>
    <!--/ CONTENT -->

 <!-- Modal -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">ADD / EDIT SCHEME</h3>
                    </div>
                    <div class="modal-body">
            {{ Form::open(array('route' => array('chit-scheme-store'), 'id' => 'form1', 'method' => 'POST')) }}
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Chit Value (INR)</label>
                    
                       {{Form::input('text', 'chit_value', null, ['id' => 'categoryname','class'=>'form-control','placeholder'=>'Enter chit value','required', 'data-parsley-trigger' => 'change'])}}
               
                    </div>
                </div>
                <div class="col-lg-4">

                     <div class="form-group">
                      <label for="inputEmail3">Term</label>
                    
                       {{Form::select('term', [''=>'Select Term','Monthly' => 'Monthly','Bi-Monthly'=>'Bi-Monthly','Weekly'=>'Weekly'],null, ['id' => 'term','class'=>'form-control','placeholder'=>'Enter number of terms', 'required', 'data-parsley-trigger' => 'change'])}}
                      
                   
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Subscribers</label>
                    
                       {{Form::input('text', 'members', null, ['id' => 'members','class'=>'form-control','placeholder'=>'Enter number of members','required', 'data-parsley-trigger' => 'change'])}}
                       
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Monthly Invest Amount (INR)</label>
                    
                       {{Form::input('text', 'monthly_amount', null, ['id' => 'monthly_amount','class'=>'form-control','placeholder'=>'Enter monthly invest amount','required', 'data-parsley-trigger' => 'change'])}}
                       
                  
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Weekly Invest Amount (INR)</label>
                    
                       {{Form::input('text', 'weekly_amount', null, ['id' => 'weekly_amount','class'=>'form-control','placeholder'=>'Enter weekly invest amount','required', 'data-parsley-trigger' => 'change'])}}
                       
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3"> Total Investment (INR)</label>
                    
                       {{Form::input('text', 'investment', null, ['id' => 'investment','class'=>'form-control','placeholder'=>'Enter total investment amount','required', 'data-parsley-trigger' => 'change'])}}
                       
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3"> Total Dividend (INR)</label>
                   
                       {{Form::input('text', 'dividend', null, ['id' => 'dividend','class'=>'form-control','placeholder'=>'Enter total dividend amount','required', 'data-parsley-trigger' => 'change'])}}
                       
               
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Average Return (%)</label>
                      
                       {{Form::input('text', 'average_return',null, ['id' => 'average_return','class'=>'form-control','placeholder'=>'Enter average return','required', 'data-parsley-trigger' => 'change'])}}
                
                    </div>
                </div>
                </div>
                </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Submit</button>
                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
@endsection