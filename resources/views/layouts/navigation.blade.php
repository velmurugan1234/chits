<!-- ================================================
================= SIDEBAR Content ===================
================================================= -->
<aside id="sidebar">


    <div id="sidebar-wrap">

        <div class="panel-group slim-scroll" role="tablist">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#sidebarNav">
                            Navigation <i class="fa fa-angle-up"></i>
                        </a>
                    </h4>
                </div>
                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">


                        <!-- ===================================================
                        ================= NAVIGATION Content ===================
                        ==================================================== -->
                        <ul id="navigation">
                            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                            <li><a href="{{ url('customer/index') }}"><i class="fa fa-list"></i> <span>Customers</span></a></li>
                            <li>
                                <a href="#"><i class="fa fa-list"></i></i> <span>Chit Type</span></a>
                                <ul>
                                    <li><a href="{{ url('/chit/scheme/index') }}">
                                        <i class="fa fa-caret-right"></i> 
                                        Chit Schemes</a>
                                    </li>
                                    <li><a href="{{ url('chit/group/index') }}"><i class="fa fa-caret-right"></i> Chit Groups</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-list"></i> <span>Settings</span></a>
                                <ul>
                                    <li><a href="{{ url('branch/index') }}">
                                        <i class="fa fa-caret-right"></i> 
                                        Branches</a>
                                    </li>
                                    <li><a href="{{ url('user/index') }}"><i class="fa fa-caret-right"></i> Users</a></li>
                                    <li><a href="{{ url('bank/index') }}"><i class="fa fa-caret-right"></i> Banks</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('chit/mapping') }}"><i class="fa fa-list"></i> 
                                    <span>Chit Mapping</span></a>

                            </li>
                           <li>
                                <a href="{{ url('my/registor/index') }}"><i class="fa fa-list"></i> 
                                    <span>My Registor</span></a>

                            </li>
                            

                        </ul>
                        <!--/ NAVIGATION Content -->
                        
                        
                    </div>
                </div>
            </div>
          
       
        </div>

    </div>


</aside>
<!--/ SIDEBAR Content -->