@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'applications?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6 " >
				 <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-danger  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
			<div class="col-md-6  text-right " >
				<div class="btn-group">
					
						<button name="apply" class="tips btn btn-sm btn-info  "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
						<button name="save" class="tips btn btn-sm btn-primary "  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
						
					
				</div>		
			</div>
			
		</div>
	</div>	


	
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
	<div class="">
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
				
				

	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("applications/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop