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
            @if($value->is_closed == 0 && $value->members_count < 20) 
            <a href="{{ url('/map/customers/to/group/'.$value->chit_group_id.'') }}">
            <section class="tile portlet">

                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font">
                    <strong>{{ $value->chit_group_ticket_no}} 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    {{ $value->members_count }} </strong></h1>
                    <ul class="controls">
                       
                    </ul>
                </div>
              

            </section>
            </a>
          @endif
        @endforeach

        </div>
        <!-- /col -->

     
        <!--  -->
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
                
                </div>
               

            </section>
            </a>
          @endif
        @endforeach

        </div>
        <!-- /col -->

    <!--     <div class="col-sm-4 portlets sortable">
            <div class="tile-header dvd dvd-btm" style="color : #fff">
                  <h3 class="custom-font"><strong>Waiting For Approval</strong> </h3>
                 
            </div>
        @foreach($result as $key => $value)
           
            @if($value->members_count == 20)
            
            <section class="tile portlet">

           
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font">
                    <strong>{{ $value->chit_group_ticket_no}} 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    
                   </strong></h1>
                    <a href="{{ url('/map/customers/to/group/'.$value->chit_group_id.'') }}">
                    <span class="label bg-dutch">Approve</span>
                    <span class="label bg-danger">Reject</span>
                        
                    </a>
                   
                </div>
               

            </section>
            
          @endif
        @endforeach

        </div> -->
     

    </div>
    <!-- /row -->

    
</div>

</section>
    <!--/ CONTENT -->

@endsection

     <!-- row -->
