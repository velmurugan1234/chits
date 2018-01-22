<div class="modal-content">
  {!! Form::model($result, ['url' => ['chit/group/update', $result->chit_group_id], 'method' => 'post', 'id' => 'form1']) !!}
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">EDIT CHIT GROUP</h3>
                    </div>
                    <div class="modal-body">
                      
               
                  <div class="form-group">
                      <label for="inputEmail3">Chit Group Name</label>
                    
                       {{Form::input('text', 'chit_group_ticket_no', null, ['id' => 'chit_group_ticket_no','class'=>'form-control','placeholder'=>'Enter chit scheme name','required'])}}
               
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3">Chit Scheme</label>
                    
                      
                       {{ Form::select('chit_scheme_id',['' => 'Select Scheme'] + $schemes->toArray(),null,array('id' => 'chit_scheme_id','class'=>'form-control', 'required')) }}                   
                    </div>
                    
                    <div class="form-group">
                   
                      <label for="inputEmail3">Branch</label>
                    
                      
                       {{ Form::select('branch_id',['' => 'Select branch'] + $branches->toArray() ,null,array('id' => 'branch_id','class'=>'form-control','required')) }}
                   
                    
                    
                        
                   
                     </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Submit</button>
                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
                    </div>
                    {!! Form::close() !!}  
                </div>
              