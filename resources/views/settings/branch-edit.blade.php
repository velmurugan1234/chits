<div class="modal-content">
    {!! Form::model($result, ['url' => ['branch/update', $result->branch_id], 'method' => 'post', 'id' => 'form1']) !!}
<div class="modal-header">
<h3 class="modal-title custom-font">EDIT BRANCH</h3>
</div>
<div class="modal-body">
 <section class="tile">

            

        <!-- tile body -->
        <div class="tile-body">

           
         
          
                <div class="row">
                <div class="form-group col-md-4">
                   
                    {{ Form::label('branch_name', 'Branch Name') }}
                    {{ Form::text('branch_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch name', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>

               
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


                <div class="form-group col-md-12">
                  
                    {{ Form::label('branch_address', 'Branch Address') }}
                    {{ Form::textarea('branch_address', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch address', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
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