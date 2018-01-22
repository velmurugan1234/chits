<div class="modal-content">
    {!! Form::model($result, ['url' => ['chit/user/update', $result->id], 'method' => 'post', 'id' => 'form1']) !!}
<div class="modal-header">
<h3 class="modal-title custom-font">EDIT USER</h3>
</div>
<div class="modal-body">
 <section class="tile">

            

        <!-- tile body -->
        <div class="tile-body">

           
           
          
            <div class="row">
                <div class="form-group col-md-6">
                   
                    {{ Form::label('first_name', 'FirstName') }}
                    {{ Form::text('first_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the first name', 'required', 
                    'data-validate-length-range' => '3', 'data-parsley-trigger' => 'change')) }}
                </div>

               
                <div class="form-group col-md-6">
                    {{ Form::label('last_name', 'LastName') }}
                    {{ Form::text('last_name', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the last name', 'required', 
                    'data-validate-length-range' => '6', 'data-parsley-trigger' => 'change')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{ Form::label('profile_photp', 'Profile Photo') }}
                    <input type="file" name="profile_photo" class="form-control" required data-parsley-trigger = "change">
                </div>
                
                <div class="form-group col-md-6">
                  
                    {{ Form::label('employee_code', 'Employee Code') }}
                    {{ Form::text('employee_code', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the employee code', 'required', 
                    'data-validate-length-range' => '4', 'data-parsley-trigger' => 'change')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  
                    {{ Form::label('employee_role', 'Employee Role') }}
                    
                    
                   {{ Form::select('employee_role',['' => 'Select', '1'=>'Admin', '2' => 'Manager', '3' => 'Staff'], null, ['class' => 'form-control col-md-8 col-xs-12', 'required', 'data-parsley-trigger' => 'change']) }}

                </div>
                <div class="form-group col-md-6">
                  
                    {{ Form::label('branch', 'Branch') }}
                    {{ Form::select('branch',['' => 'Select'] + $branches->toArray(), null, ['class' => 'form-control col-md-8 col-xs-12', 'required', 'data-parsley-trigger' => 'change']) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the email', 'required', 
                    'data-validate-length-range' => '4', 'data-parsley-trigger' => 'change')) }}
                </div>
                <div class="form-group col-md-6">
                  
                    {{ Form::label('employee_contact_no', 'Employee Contact No') }}
                    {{ Form::number('employee_contact_no', null, 
                    array('class' => 'form-control col-md-8 col-xs-12', 
                    'placeholder' => 'Enter the employee contact no', 'required', 
                    'data-validate-length-range' => '6', 'id' => 'phone', 'data-parsley-trigger' => 'change',
                    'pattern' => '^[\d\+\-\.\(\)\/\s]*$')) }}
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