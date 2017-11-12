@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	}); 
</script>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
				
				<h2 class="panel-title">{{ $header }}</h2>
			</header>
			<div class="panel-body">
				{!! Form::open(['action' => 'PortfolioController@store', 'method' => 'POST', 'class'=>'form-horizontal form-bordered', 'files' => true]) !!}
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								{!! Form::label('name','Nazwa projektu',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Nazwa projektu']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('slug','Slug',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('slug', null,['class'=>'form-control', 'placeholder'=>'Slug']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('project_date','Data projektu',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('project_date', null,['class'=>'form-control', 'placeholder'=>'Data projektu','data-plugin-datepicker'=>'']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('description','Opis',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Opis']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('client_name','Klient',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('client_name', null,['class'=>'form-control', 'placeholder'=>'Klient']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('live_preview_url','Url',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('live_preview_url', null,['class'=>'form-control', 'placeholder'=>'Url']) !!}
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3 col-md-offset-11">
									{!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
								</div>
							</div>					
						</div>
						<div class="col-md-4">
							<div class="form-group">
								{!! Form::label('miniature','Miniatura',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::file('miniature', null,['class'=>'form-control', 'placeholder'=>'Miniatura']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('preview','Podgląd',['class' =>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::file('preview', null,['class'=>'form-control', 'placeholder'=>'Podgląd']) !!}
								</div>
							</div>
								<div class="form-group">
									{!! Form::label('category_id','Kategoria',['class'=>'col-md-3 control-label']) !!}
									<div class="col-md-9">
										{!! Form::select('category_id', $categories, null, ['class' => 'form-control mb-md']) !!}
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('SkillList','Skills',['class'=>'col-md-3 control-label']) !!}
									<div class="col-md-9">
										{!! Form::select('SkillList[]', $skills, null, ['class' => 'form-control','multiple' => true]) !!}
									</div>
								</div>
							<div class="form-group">
								<div class="col-md-9">	
									{!! Form::label('status','Publiczny',['class' =>'col-md-3 control-label']) !!}
								</div>
								<div class="col-md-9">
									<div class="switch switch-sm switch-success">
										{!! Form::checkbox('status', 1, false,['class'=>'switch switch-sm switch-success','data-plugin-ios-switch checked'=>'checked']); !!}
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				{!! Form::close() !!}
			</div>
		</section>
	</div>
</div>

<script src="{{ asset('template/dashboard/vendor/ios7-switch/ios7-switch.js') }}"></script>
@endsection
