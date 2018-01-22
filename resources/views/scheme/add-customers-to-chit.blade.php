@extends('layouts.app')

@section('title', 'Add Customers To Chit Group')

@section('content')

<section id="content">

<div class="page page-fullwidth-layout">

<div class="pageheader">



<div class="page-bar">

<ul class="page-breadcrumb">
    <li>
        <a href="#"><i class="fa fa-home"></i> SathyChits</a>
    </li>
    
    <li class="active">
        <a href="">Chit Mapping</a>
    </li>
</ul>

</div>

</div>
     

            <section class="tile">

                               
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>ADD MEMBERS TO CHIT GROUP</strong></h1>
                                    <ul class="controls">
                                        <li>
                                            <a role="button" tabindex="0" class="pickDate">
                                                <span>November 7, 2017 - December 6, 2017</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
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
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                               
                                <div class="tile-body table-custom">

                                    <div class="table-responsive table table-striped">
                                 <table class="table table-custom dataTable no-footer" id="project-progress" role="grid" aria-describedby="project-progress_info">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Customer ID</th>
                                                <th>Customer Name</th>
                                                <th>Ticket No</th>
                                            </tr>
                                            </thead>
                                            {{ Form::open(array('route' => array('map-chit-members','store'), 'id' => 'form1', 'method' => 'POST')) }}
                                            <tbody>

                                            
                                            @for($i = 1; $i < 20; $i++)
                                            
                                            <input type="hidden" name="chit_group_id" value="{{ $chit_group->chit_group_id }}">
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $i }}</td>
                                                <td>{{ Form::select('customer_id[]',['' => 'Select'] + $customers->toArray(), null, ['class' => 'form-control col-md-8 col-xs-12', 'required', 'data-parsley-trigger' => 'change']) }}</td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text"  name="ticket_no[]" class="form-control" value="{{$chit_group->chit_group_ticket_no}} / {{ $i }}"></td>

                                            </tr>
                                            @endfor
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">20</td>
                                                <td contenteditable="true">A000</td>
                                                <td contenteditable="true">Sathy Chit Funds Pvt Ltd</td>
                                                <td> <input type="text" disabled="" name="ticket_no" class="form-control" value="{{ $chit_group->chit_group_ticket_no }} / 20"></td>

                                            </tr>
                                            
                                            </tbody>
                                               
                                        </table>
                                         <input type="submit" class="btn btn-success " value="Submit">
                                            {{ Form::close() }}
                                    </div>

                                </div>
                            
                      </section>  
      
      </div>


</section>
    <!--/ CONTE