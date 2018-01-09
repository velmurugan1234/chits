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

     
        <div class="col-sm-4 portlets sortable">
            <div class="tile-header dvd dvd-btm" style="color : #fff">
                  <h3 class="custom-font"><strong>Mapped Chit Groups</strong> </h3>
                 
            </div>
        @foreach($result as $key => $value)
           
            @if($value->members_count == 20)
            
            <section class="tile portlet">

           
                <div class="tile-header dvd dvd-btm">
                <a href="{{ url('/map/customers/to/group/'.$value->chit_group_id.'') }}">
                    <h1 class="custom-font">
                    <strong>{{ $value->chit_group_ticket_no}} 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    
                   </strong></h1>
                  </a>
                  @if($value->is_approve == 0)
                    <span class="label bg-dutch approve" data-id = "{{ $value->chit_group_id }}">Approve</span>
                  @endif     
                    </a>
                   
                </div>
               

            </section>
            
          @endif
        @endforeach

        </div>
     

    </div>
    <!-- /row -->

    
</div>

</section>
<script type="text/javascript">
      $('.approve').click(function(){
            arr = {};
            arr['_token'] = '{{csrf_token()}}';
            arr['chit_group_id'] = $(this).attr('data-id');
            $.ajax({
                  type: 'POST',
                  url: '{{URL::to('/')}}/approve/chit/group',
                  data: arr,
                  success:function(data){
                        $(".result").html(data);
                  }
            });
      });
</script>

@endsection

     <!-- row -->
