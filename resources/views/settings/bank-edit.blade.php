<div class="modal-content">
    {!! Form::model($result, ['url' => ['bank/update', $result->bank_id], 'method' => 'post', 'id' => 'form1']) !!}
<div class="modal-header">
<h3 class="modal-title custom-font">EDIT BANK</h3>
</div>
<div class="modal-body">
 <section class="tile">

            

          <!-- tile body -->
            <div class="tile-body">

                    
          
                <div class="row">
                <div class="form-group col-md-4">
                   
                    {{ Form::label('bank_name', 'Bank Name') }}
                    {{ Form::text('bank_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the bank name', 'required', 
                    'data-validate-length-range' => '100', 'data-parsley-trigger' => 'change')) }}
                </div>

               
                <div class="form-group col-md-4">
                    {{ Form::label('account_number', 'Account Number') }}
                    {{ Form::text('account_no', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the account code', 'required', 
                    'data-validate-length-range' => '16', 'data-parsley-trigger' => 'change')) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('ifsc', 'IFSC') }}
                    {{ Form::text('ifsc', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the ifsc code', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
                
                <div class="form-group col-md-6">
                  
                    {{ Form::label('branch', 'Branch') }}
                    {{ Form::text('branch', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the branch', 'required', 
                    'data-validate-length-range' => '100', 'data-parsley-trigger' => 'change')) }}
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
