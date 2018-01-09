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
                                                    
               
                {{ Form::open(array('route' => array('map-chit-members','insert'), 'class' => 'form-horizontal form-label-left', 'method' => 'POST')) }}
                     <input type="hidden" name="re_id"  value="{{ $re_id }}"/>
 
                                 <table class="table table-custom dataTable no-footer" id="project-progress" role="grid" aria-describedby="project-progress_info">
                                            <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Customer ID</th>
                                                <th>Ticket No</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($chit_mem as $key => $value)
                                            <input type="hidden" name="chit_mem_id[]"  value="{{ $value->chit_mem_id }}"/> 

                                            <tr><td></td><td>{{ Form::select("customer_name_update[]",["" => "Select"] + $customers->toArray(), $value->customer_id , ["class" => "form-control col-md-8 col-xs-12 customer_id", "required"]) }}</td><td><input type="text" name="customer_id_update[]" placeholder="Customer code" required class="form-control" value="{{ $value->customer_id }}" style="text-align:center;background-color:#fff!important;border : solid 1px #7db3e1!important;border-radius : 5px;text-align: center;" /></td>
                                            <td>
                                            <input type="text" 
                                            name="ticket_no_update[]" class="form-control" value="{{ $value->ticket_no }}"/>
                                            </td>
                                            <td>
                                                {{ Form::select('lot_preference_update[]',['' => 'Select', '05' => 'O1 to 05', '10' => 'O6 to 10', '15' => '11 to 15', '20' => '16 to 20'] , $value->lot_preference, ['class' => 'form-control col-md-8 col-xs-12', 'data-parsley-trigger' => 'change']) }}
                                            </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                               
                                        </table><br>
                                          <div>
                                                <a href="javascript:void(0)" class="btn btn-outline btn-warning dim add-qustion " type="button">Add &nbsp;&nbsp;
                                                      <i class="fa fa-plus-circle"></i>
                                                    </a>

                                                      <button class="btn btn-success " type="submit" style="float : right;margin: 0 5px 0 0;">Save 
                                                      </button>

                                          </div>
               
            
                                            {{ Form::close() }}
                                    </div>

                                </div>
                            
                      </section>  
      
      </div>
 

<script type="text/javascript">
    $('.submit').click(function(){

        $('form').submit();
        
    });
    $('.add-qustion').click(function() {
  // alert('hee');
    // var default_msg = $('#score_settings_table tbody tr:eq(0)').children("td:first").text()  

    // if($.trim(default_msg) == $.trim('Sorry! No matching records found')) {
    //   $('#score_settings_table tbody').html('');
    // }

     @php $currenttime = \Carbon\Carbon::now()->toDayDateTimeString(); @endphp

    var trlength = $('tbody tr').length;
   
    if(trlength < 19) {

        $('#project-progress tbody').append('<tr><td></td><td>{{ Form::select("customer_name[]",["" => "Select"] + $customers->toArray(), null, ["class" => "form-control col-md-8 col-xs-12 customer_id", "required"]) }}</td><td><input type="text" name="customer_id[]" placeholder="Customer code" required class="form-control" style="text-align:center;background-color:#fff!important;border : solid 1px #7db3e1!important;border-radius : 5px;text-align: center;" /></td><td></td><td>{{ Form::select("lot_preference[]",["" => "Select", "05" => "O2 to 05", "10" => "O6 to 10", "15" => "11 to 15", "20" => "16 to 20"] ,null, ["class" => "form-control col-md-8 col-xs-12", "data-parsley-trigger" => "change"]) }}</td></tr>');

            $('td, td input').css("text-align","center");
            serialNo();
            serialNo(3);


    }
    else if(trlength == 19){
         $('#project-progress tbody').append('<tr><td></td><td><input type="text"  name="customer_name[]" class="form-control" value="Sathy Chit Funds Pvt Ltd" readonly></td><td><input type="text" name="customer_id[]" value="A000" placeholder="Customer code" required class="form-control" readonly style="text-align:center;background-color:#fff!important;border : solid 1px #7db3e1!important;border-radius : 5px;text-align: center;" /></td><td></td><td>{{ Form::select("lot_preference[]",["01" => "O1"] ,null, ["class" => "form-control col-md-8 col-xs-12", "data-parsley-trigger" => "change","readonly" ]) }}</td></tr>');

            $('td, td input').css("text-align","center");
            serialNo();
            serialNo(3);
    }
   
});

    $(document).on('change','.customer_id',function() {
    
      var names = this.value;
      if(names != 'A000') {
            var row = $(this).attr('data-id');
            row = row - 1;
            $("tbody tr:eq("+ row +") td:eq(2) input").val(names);
      }
    });
    $(document).ready(function(){
        serialNo();
    });

function serialNo(sortcol = '') {
    if(sortcol == '') {
      sortcol = 0;
    }
    $.each($("tbody tr"),function (i,el) {
        if(sortcol == 0){
        $(this).find("td:eq("+sortcol+")").text(i + 1); // Simply couse the first "prototype" is not counted in the list
    }
    else{
        if($(this).find("td:eq("+sortcol+")").text() == ''){

            $(this).find("td:eq("+sortcol+")").html('<input type="text"  name="ticket_no[]" class="form-control" value="{{$chit_group->chit_group_ticket_no}} / '+ (parseInt(i)+1)+'">');

         }
         }
    $(this).find("td:eq(1) > select ").attr("data-id",(i + 1));
        
    });
    
}

</script>
@endsection