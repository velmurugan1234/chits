@extends('layouts.app')

@section('title', 'Users')

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
        <a href="#">Settings</a>
    </li>
    <li class="active">
        <a href="">Users</a>
    </li>
</ul>

</div>

</div>


<div class="row">
    <!-- col -->
    <div class="col-md-6">

        <!-- tile -->
        <section class="tile">

            <!-- tile header -->
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Add New Branch</strong></h1>
                <ul class="controls">
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
                    <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>
            <!-- /tile header -->

            <!-- tile body -->
            <div class="tile-body">

                {{ Form::open(array('route' => array('branch-store','store'), 'class' => 'form1', 'method' => 'POST')) }}
          
                <div class="row">
                <div class="form-group col-md-4">
                   
                    {{ Form::label('branch_name', 'Branch Name') }}
                    {{ Form::text('branch_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch name', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>

               
                <div class="form-group col-md-4">
                    {{ Form::label('branch_code', 'Branch Code') }}
                    {{ Form::text('branch_code', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch code', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('branch_city', 'Branch City') }}
                    {{ Form::text('branch_city', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch city', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
                
                <div class="form-group col-md-6">
                  
                    {{ Form::label('branch_mail', 'Branch Mail') }}
                    {{ Form::email('branch_mail', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch mail', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
                <div class="form-group col-md-6">
                  
                    {{ Form::label('branch_contact_no', 'Branch Contact No') }}
                    {{ Form::number('branch_contact_no', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch contact no', 'required', 
                    'data-validate-length-range' => '6', 'id' => 'phone', 'data-parsley-trigger' => 'change',
                    'pattern' => '^[\d\+\-\.\(\)\/\s]*$')) }}
                </div>


                <div class="form-group col-md-12">
                  
                    {{ Form::label('branch_address', 'Branch Address') }}
                    {{ Form::textarea('branch_address', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch address', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
                </div>

               

           


            </div>
            <!-- /tile body -->

            <!-- tile footer -->
            <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                <!-- SUBMIT BUTTON -->
                <button type="submit" class="btn btn-lightred form1Submit" id="form2Submit">Submit</button>
            </div>
                    <!-- /tile footer -->
        {{ Form::close()}}
        </section>
    </div>    <!-- /tile --><!-- col -->

<!-- USER -->
   <!-- col -->
    <div class="col-md-6">

        <!-- tile -->
        <section class="tile">

            <!-- tile header -->
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Add New User</strong></h1>
                <ul class="controls">
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
                    <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>
            <!-- /tile header -->

            <!-- tile body -->
            <div class="tile-body">

               {{ Form::open(array('route' => array('user-store'), 'class' => 'form1', 'method' => 'POST')) }}
                <div class="row">
                <div class="form-group col-md-6">
                   
                    {{ Form::label('first_name', 'FirstName') }}
                    {{ Form::text('first_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the first name', 'required', 
                    'data-validate-length-range' => '3', 'data-parsley-trigger' => 'change')) }}
                </div>

               
                <div class="form-group col-md-6">
                    {{ Form::label('last_name', 'LastName') }}
                    {{ Form::text('last_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the last name', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{ Form::label('profile_photp', 'Profile Photo') }}
                    <input type="file" name="profile_photo" class="form-control" required data-parsley-trigger = "change">
                </div>
                
                <div class="form-group col-md-6">
                  
                    {{ Form::label('employee_code', 'Employee Code') }}
                    {{ Form::text('employee_code', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the employee code', 'required', 
                    'data-validate-length-range' => '4', 'data-parsley-trigger' => 'change')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  
                    {{ Form::label('employee_role', 'Employee Role') }}
                    
                    
                   {{ Form::select('employee_role',['' => 'Select', '1'=>'Admin', '2' => 'Manager', '3' => 'Staff'], null, ['class' => 'form-control col-md-8 col-xs-12', 'required', 'data-parsley-trigger' => 'change']) }}

                </div>
                <div class="form-group col-md-6">
                  
                    {{ Form::label('branch', 'Branch') }}
                    {{ Form::select('branch',['' => 'Select'] + $getBranches->toArray(), null, ['class' => 'form-control col-md-8 col-xs-12', 'required', 'data-parsley-trigger' => 'change']) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the email', 'required', 
                    'data-validate-length-range' => '4', 'data-parsley-trigger' => 'change')) }}
                </div>
                <div class="form-group col-md-6">
                  
                    {{ Form::label('employee_contact_no', 'Employee Contact No') }}
                    {{ Form::number('employee_contact_no', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the employee contact no', 'required', 
                    'data-validate-length-range' => '6', 'id' => 'phone', 'data-parsley-trigger' => 'change',
                    'pattern' => '^[\d\+\-\.\(\)\/\s]*$')) }}
                </div>

            </div>
                
            </div>
            <!-- /tile body -->

            <!-- tile footer -->
            <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                <!-- SUBMIT BUTTON -->
                <button type="submit" class="btn btn-lightred form1Submit" id="">Submit</button>
            </div>
                    <!-- /tile footer -->
        {{ Form::close()}}
        </section>
    </div> 

</div>

<div class="row">
    <!-- USER -->
   <!-- col -->
    <div class="col-md-6">

        <!-- tile -->
        <section class="tile">

            <!-- tile header -->
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Add New Bank</strong></h1>
                <ul class="controls">
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
                    <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>
            <!-- /tile header -->

            <!-- tile body -->
            <div class="tile-body">

                {{ Form::open(array('route' => array('branch-store','store'), 'class' => 'form1', 'method' => 'POST')) }}
          
                
            </div>
            <!-- /tile body -->

            <!-- tile footer -->
            <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                <!-- SUBMIT BUTTON -->
                <button type="submit" class="btn btn-lightred form1Submit" id="">Submit</button>
            </div>
                    <!-- /tile footer -->
        {{ Form::close()}}
        </section>
    </div> 
</div>



<div class="row">
    <!-- col -->
    <div class="col-md-12">


        <!-- tile -->
        <section class="tile">

            <!-- tile header -->
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Branches</strong></h1>
                <ul class="controls">
                    
                    <li>
                        <a data-toggle="modal" data-target="#myModal2" role="button" tabindex="0" id="add-entry">
                            <i class="fa fa-plus mr-5"></i> Add Branch</a>
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
                            <th>Branch Name</th>
                            <th>Branch Code</th>
                            <th>Branch City</th>
                            <th style="width:30px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($branches as $branch)
                        <tr>
                            <td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                            <td>{!! $branch->branch_name !!}</td>
                            <td>{!! $branch->branch_code !!}</td>
                            <td>{!! $branch->branch_city !!}</td>
                            <td>
                                <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                            </td>
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



<div class="row">
    <!-- col -->
    <div class="col-md-12">


        <!-- tile -->
        <section class="tile">

            <!-- tile header -->
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Users</strong></h1>
                <ul class="controls">
                    
                   
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
                            <th>Name</th>
                            <th>Emp Role</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Emp Code</th>
                            <th style="width:30px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                            <td>{!! $user->first_name !!} {!! $user->last_name !!}</td>
                            <td>{!! $user->employee_role !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->employee_contact_no !!}</td>
                            <td>{!! $user->employee_code !!}</td>
                            <td>
                                <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                            </td>
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



@endsection

