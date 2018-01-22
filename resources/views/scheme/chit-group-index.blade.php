@extends('layouts.app')

@section('title', 'Chit Group')

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
        <a href="#">Chit Types</a>
    </li>
    <li class="active">
        <a href="">Chit Groups</a>
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
                <h1 class="custom-font"><strong>Chit Groups</strong></h1>
                <ul class="controls">
                	
                    <li style="backgroud:red">
                        <a data-toggle="modal" data-target="#myModal2" role="button" tabindex="0" id="add-entry">
                            <i class="fa fa-plus mr-5"></i> Add Chit Group</a>
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
                            <th>Chit Group Ticket No</th>
                            <th>Chit Scheme</th>
                            <th>Branch</th>
                            <th style="width:30px;"></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chit_groups as $group)
                        <tr id="tr{{$group->chit_group_id}}">
                            <td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                            <td>{{ $group->chit_group_ticket_no }}</td>
                            <td>{{ $scheme::find($group->chit_scheme_id)->chit_value }}</td>
                            <td>{{ $branch::find($group->branch_id)->branch_name }}</td>
                            <td>
                                <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                            </td>
                             <td>
                                    <a href="#" data-id="{{$group->chit_group_id}}" class="edit_group"><i class="fa fa-edit"></i></a>
                                    <a href="#" data-id="{{$group->chit_group_id}}" class="delete_group"><i class="fa fa-trash-o"></i></a>
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
                    {{ Form::open(array('route' => array('chit-group-store','store'), 'id' => 'form1', 'method' => 'POST')) }}
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">ADD CHIT GROUP</h3>
                    </div>
                    <div class="modal-body">
                                  
                  <div class="form-group">
                      <label for="inputEmail3">Chit Group Name</label>
                    
                       {{Form::input('text', 'chit_group_ticket_no', null, ['id' => 'chit_group_ticket_no','class'=>'form-control','placeholder'=>'Enter chit scheme name','required'])}}
               
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3">Chit Scheme</label>
                    
                      
                       {{ Form::select('chit_scheme_id',['' => 'Select Scheme'] + $schemes->toArray(),null,array('id' => 'chit_scheme_id','class'=>'form-control', 'required')) }}
                   
                    </div>
                    
                    <div class="form-group">
                   
                      <label for="inputEmail3">Branch</label>
                    
                      
                       {{ Form::select('branch_id',['' => 'Select branch'] + $branches->toArray() ,null,array('id' => 'branch_id','class'=>'form-control','required')) }}
                   
                    
                    
                        
                   
                     </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Submit</button>
                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
                    </div>
                {{ Form::close() }}
            </div>

            </div>
        </div>
    







        <script>
            $('.edit_group').click(function(){
 
                
                var arr = {};
                arr['group_id'] = $(this).attr('data-id');
                arr['_token'] = '{{csrf_token()}}',
                $.ajax({
                    type:"POST",
                    url:'{{url("chit/group/edit")}}',
                    data:arr,
                    success: function(result){
                        $('#add_modal').empty();
                        $('#add_modal').html(result);
                        $('#myModal2').modal('toggle');
                    }
                });     
            });

            $('.delete_group').click(function(){
                
                var arr = {};
                arr['group_id'] = $(this).attr('data-id');
                arr['_token'] = '{{csrf_token()}}',
                $.ajax({
                    type:"POST",
                    url:'{{url("chit/group/delete")}}',
                    data:arr,
                    success: function(result){
                        alert(result);
                        $("#tr"+arr['group_id']).remove();
                    }
                });     
            });
        </script>
@endsection