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
                <h1 class="custom-font"><strong>Users</strong></h1>
                <ul class="controls">
                	
                    <li>
                        <a data-toggle="modal" data-target="#myModal2" role="button" tabindex="0" id="add-entry">
                            <i class="fa fa-plus mr-5"></i> Add User</a>
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
                            <th>Email</th>
                            <th style="width:30px;"></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users_list as $result )    
                        <tr id="tr{{$result->id}}">
                            <td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                            <td>{{$result->first_name}}</td>
                            <td>{{$result->last_name}}</td>
                            <td>{{$result->email}}</td>
                            <td>
                                <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                            </td>
                            <td>
                                <a href="#" data-id="{{$result->id}}" class="edit_user"><i class="fa fa-edit"></i></a>
                                <a href="#" data-id="{{$result->id}}" class="delete_user"><i class="fa fa-trash-o"></i></a>
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
<div class="modal-dialog modal-lg" id="add_modal">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title custom-font">ADD USER</h3>
</div>
<div class="modal-body">
 <section class="tile">

            

        <!-- tile body -->
        <div class="tile-body">

           
         {!! Form::open(array('route' => array('user-store'), 'id' => 'form1', 'method' => 'POST')) !!}
          
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
 {!! Form::close()!!}
</div>
</div>
</div>



        <script>
            $('.edit_user').click(function(){
 
                
                var arr = {};
                arr['user_id'] = $(this).attr('data-id');
                arr['_token'] = '{{csrf_token()}}',
                $.ajax({
                    type:"POST",
                    url:'{{url("chit/user/edit")}}',
                    data:arr,
                    success: function(result){
                        $('#add_modal').empty();
                        $('#add_modal').html(result);
                        $('#myModal2').modal('toggle');
                    }
                });     
            });

            $('.delete_user').click(function(){
                
                var arr = {};
                arr['user_id'] = $(this).attr('data-id');
                arr['_token'] = '{{csrf_token()}}',
                $.ajax({
                    type:"POST",
                    url:'{{url("chit/user/delete")}}',
                    data:arr,
                    success: function(result){
                        alert(result);
                        $("#tr"+arr['user_id']).remove();
                    }
                });     
            });
        </script>
@endsection