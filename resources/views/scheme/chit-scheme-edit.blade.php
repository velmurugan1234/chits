 <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">EDIT SCHEME</h3>
                    </div>
                    <div class="modal-body">

               {!! Form::model($result, ['url' => ['chit/scheme/update', $result->chit_scheme_id], 'method' => 'post', 'id' => 'form1']) !!}
                 <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Chit Value (INR)</label>
                    
                       {{Form::input('text', 'chit_value', null, ['id' => 'categoryname','class'=>'form-control','placeholder'=>'Enter chit value','required', 'data-parsley-trigger' => 'change'])}}
               
                    </div>
                </div>
                <div class="col-lg-4">

                     <div class="form-group">
                      <label for="inputEmail3">Term</label>
                    
                       {{Form::select('term', [''=>'Select Term','Monthly' => 'Monthly','Bi-Monthly'=>'Bi-Monthly','Weekly'=>'Weekly'],null, ['id' => 'term','class'=>'form-control','placeholder'=>'Enter number of terms', 'required', 'data-parsley-trigger' => 'change'])}}
                      
                   
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Subscribers</label>
                    
                       {{Form::input('text', 'members', null, ['id' => 'members','class'=>'form-control','placeholder'=>'Enter number of members','required', 'data-parsley-trigger' => 'change'])}}
                       
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Monthly Invest Amount (INR)</label>
                    
                       {{Form::input('text', 'monthly_amount', null, ['id' => 'monthly_amount','class'=>'form-control','placeholder'=>'Enter monthly invest amount','required', 'data-parsley-trigger' => 'change'])}}
                       
                  
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Weekly Invest Amount (INR)</label>
                    
                       {{Form::input('text', 'weekly_amount', null, ['id' => 'weekly_amount','class'=>'form-control','placeholder'=>'Enter weekly invest amount','required', 'data-parsley-trigger' => 'change'])}}
                       
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3"> Total Investment (INR)</label>
                    
                       {{Form::input('text', 'investment', null, ['id' => 'investment','class'=>'form-control','placeholder'=>'Enter total investment amount','required', 'data-parsley-trigger' => 'change'])}}
                       
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3"> Total Dividend (INR)</label>
                   
                       {{Form::input('text', 'dividend', null, ['id' => 'dividend','class'=>'form-control','placeholder'=>'Enter total dividend amount','required', 'data-parsley-trigger' => 'change'])}}
                       
               
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="inputEmail3">Average Return (%)</label>
                      
                       {{Form::input('text', 'average_return',null, ['id' => 'average_return','class'=>'form-control','placeholder'=>'Enter average return','required', 'data-parsley-trigger' => 'change'])}}
                
                    </div>
                </div>
                <input type="submit" value="Submit"/>
                </div>
                </div>
                    <div class="modal-footer">
                      
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Submit</button>

                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                
                </div>
                
