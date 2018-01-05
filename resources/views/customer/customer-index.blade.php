@extends('layouts.app')

@section('title', 'Customers')

@section('content')

   <section id="content">

        <div class="page page-fullwidth-layout">

            <div class="pageheader">

                

                <div class="page-bar">

                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                        </li>
                        <li>
                            <a href="#">Layouts</a>
                        </li>
                        <li>
                            <a href="layout-fullwidth.html">Full-width Layout</a>
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
                                    	 <!-- <li class="remove">
                                    	 	<a href="{{ url('/add/edit/customer') }}">role="button" tabindex="0" class="tile-close">
                                    	 		<i class="fa fa-plus"></i>
                                    	 	</a>
                                    	 </li> -->
                                        <li>
                                            <a href="{{ url('/add/edit/customer') }}" role="button" tabindex="0" id="add-entry">
                                                <i class="fa fa-plus mr-5"></i> Add Entry</a>
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
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>
                                                    <span class="check-toggler toggle-class" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Mary</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>
                                                    <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Marv</td>
                                                <td>Bond</td>
                                                <td>@marvo</td>
                                                <td>
                                                    <span class="check-toggler" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Larry</td>
                                                <td>Cardl</td>
                                                <td>@lurie</td>
                                                <td>
                                                    <span class="check-toggler toggle-class" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Jennifer</td>
                                                <td>Minelly</td>
                                                <td>@jen</td>
                                                <td>
                                                    <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Sly</td>
                                                <td>Stall</td>
                                                <td>@sly</td>
                                                <td>
                                                    <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Arnold</td>
                                                <td>Percy</td>
                                                <td>@arnie</td>
                                                <td>
                                                    <span class="check-toggler checked toggle-class" data-toggle="checked"></span>
                                                </td>
                                            </tr>
                                                <tr><td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label></td>
                                                <td>Jack</td>
                                                <td>Black</td>
                                                <td>@blacko</td>
                                                <td>
                                                    <span class="check-toggler toggle-class" data-toggle="checked"></span>
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

@endsection