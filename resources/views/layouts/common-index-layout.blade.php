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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th style="width:30px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                            </td>
                        </tr>
                            
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
<h3 class="modal-title custom-font">ADD / EDIT BRANCH</h3>
</div>
<div class="modal-body">
 <section class="tile">

            

        <!-- tile body -->
        <div class="tile-body">

           

            <form name="form1" role="form" id="form1">
                 <div class="row">
                <div class="form-group col-md-4">
                    <!-- label for="username">Username: </label>
                    <input type="text" name="username" id="username" class="form-control"
                           data-parsley-trigger="change"
                           data-parsley-range="[4, 20]"
                           required> -->
                    {{ Form::label('branch_name', 'Branch Name') }}
                    {{ Form::text('branch_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch name', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>

                <!-- <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" class="form-control"
                           data-parsley-trigger="change"
                           required>
                </div> -->

             

                    <!-- <div class="form-group col-md-6">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" class="form-control"
                               data-parsley-trigger="change"
                               data-parsley-range="[4, 20]"
                               required>
                    </div> -->
               
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


                <!-- <div class="form-group">
                    <label for="phone">Phone: </label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="(XXX) XXXX XXX"
                           data-parsley-trigger="change"
                           pattern="^[\d\+\-\.\(\)\/\s]*$"
                           required>
                </div> -->
                <div class="form-group col-md-12">
                  
                    {{ Form::label('branch_address', 'Branch Address') }}
                    {{ Form::textarea('branch_address', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch address', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
                </div>

                <div class="form-group">
                <div class="checkbox">
                    <label class="checkbox checkbox-custom">
                        <input type="checkbox" name="agree" id="agree"
                               data-parsley-trigger="change"
                               required>
                        <i></i> I agree to the <a href class="text-info">Terms of Service</a>
                    </label>
                </div>
            </div>

            </form>

        </div>
        <!-- /tile body -->

        <!-- tile footer -->
       
        <!-- /tile footer -->

    </section>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-success btn-ef btn-ef-3 btn-ef-3c" id="form1Submit">
    <i class="fa fa-arrow-right"></i> Submit</button>
<button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
</div>
</div>
</div>
</div>

@endsection

