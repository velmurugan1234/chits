 @extends('layouts.app')

@section('title', 'Chit Mapping')

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
    <div class="row">

        <!-- col -->
        <div class="col-sm-4 portlets sortable">
         <!-- tile header -->
                <div class="tile-header dvd dvd-btm" style="color : #fff">
                    <h3 class="custom-font"><strong>Opened Chit Group</strong> </h3>
                 
                </div>
        @foreach($result as $key => $value)
            <!-- tile -->
            @if($value->is_closed == 0)
            <a href="{{ url('/map/customers/to/group/'.$value->chit_group_id.'') }}">
            <section class="tile portlet">

                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>{{ $value->chit_group_ticket_no}}</strong> </h1>
                    <ul class="controls">
                       <!--  <li class="dropdown">

                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                                <i class="fa fa-spinner fa-spin"></i>
                            </a> -->

                           <!--  <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
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
                            </ul> -->

                        <!-- </li> -->
                        <!-- <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li> -->
                    </ul>
                </div>
                <!-- /tile header -->

                <!-- tile body -->
             <!-- <div class="tile-body">
                    <h4> Total chits : 20</h4>
                    <h4> No of Subscribres filled : 12</h4>
                    <h4> No of Subscribres filled : 12</h4>
                    <h4> Start Date : 12-12-2017</h4>
                    <h4> End Date : 12-12-2020</h4>
                </div> -->
                <!-- /tile body -->

            </section>
            </a>
          @endif
        @endforeach

        </div>
        <!-- /col -->

      <!-- col -->
        <div class="col-sm-4 portlets sortable">
            <div class="tile-header dvd dvd-btm" style="color : #fff">
                  <h3 class="custom-font"><strong>Closed Chit Group</strong> </h3>
                 
            </div>
        @foreach($result as $key => $value)
            <!-- tile -->
            @if($value->is_closed == 1)
            <a href="{{ url('/map/customers/to/group/'.$value->chit_group_id.'') }}">
            <section class="tile portlet">

                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>{{ $value->chit_group_ticket_no}}</strong> </h1>
                    <!-- <ul class="controls">
                        
                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                    </ul> -->
                </div>
                <!-- /tile header -->

                <!-- tile body -->
                <!-- <div class="tile-body">
                    <h4> Total chits : 20</h4>
                    <h4> No of Subscribres filled : 12</h4>
                    <h4> No of Subscribres filled : 12</h4>
                    <h4> Start Date : 12-12-2017</h4>
                    <h4> End Date : 12-12-2020</h4>
                </div> -->
                <!-- /tile body -->

            </section>
            </a>
          @endif
        @endforeach

        </div>
        <!-- /col -->
     
      <!-- col -->
        <div class="col-sm-4 portlets sortable">
            <div class="tile-header dvd dvd-btm" style="color : #fff">
                    <h3 class="custom-font"><strong>Ongoing Chit Group</strong> </h3>
                 
                </div>
        @foreach($result as $key => $value)
            <!-- tile -->
            @if($value->is_closed == 2)
            <a href="{{ url('/map/customers/to/group/'.$value->chit_group_id.'') }}">
            <section class="tile portlet" >

                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>{{ $value->chit_group_ticket_no}}</strong> </h1>
                   <!--  <ul class="controls">
                        
                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                    </ul> -->
                </div>
                <!-- /tile header -->

                <!-- tile body -->
               <!--  <div class="tile-body">
                    <h4> Total chits : 20</h4>
                    <h4> No of Subscribres filled : 12</h4>
                    <h4> No of Subscribres filled : 12</h4>
                    <h4> Start Date : 12-12-2017</h4>
                    <h4> End Date : 12-12-2020</h4>
                </div> -->
                <!-- /tile body -->

            </section>
            </a>
          @endif
        @endforeach

        </div>
        <!-- /col -->

     

    </div>
    <!-- /row -->

    
</div>

</section>
    <!--/ CONTENT -->

@endsection

     <!-- row -->
