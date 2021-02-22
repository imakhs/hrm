

		 {!! Form::open(array('url'=>'applications', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<ul class="nav nav-tabs form-tab"><li class=" nav-item "><a href="#PresenterApplicantDetails" data-toggle="tab" class="nav-link active">Presenter Applicant Details</a></li>
				</ul><div class="tab-content"><div class="tab-pane m-t active" id="PresenterApplicantDetails"> 
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Audio Clip" class=" control-label col-md-4 "> Audio Clip <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='Clip' id='Clip' value='{{ $row['Clip'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 "> Name <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='Name' id='Name' value='{{ $row['Name'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Phone(without the zero)" class=" control-label col-md-4 "> Phone(without the zero) <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='Phone' id='Phone' value='{{ $row['Phone'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Curriculum Vitae" class=" control-label col-md-4 "> Curriculum Vitae <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="cv" class="upload"       />
						</div>
						<div class="cv-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["cv"],"/uploads/applications/clips") !!}
						</div>
					 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Experience" class=" control-label col-md-4 "> Experience <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='experience' id='experience' value='{{ $row['experience'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Rating" class=" control-label col-md-4 "> Rating <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='rating' id='rating' value='{{ $row['rating'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 
				</div>
				
				

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
