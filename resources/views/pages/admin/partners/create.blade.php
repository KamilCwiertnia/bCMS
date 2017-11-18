@extends('layouts.dashboard')
@section('content')
@include('errors.error')
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
				{!! Form::open(['action' => 'PartnerController@store', 'method' => 'POST', 'class'=>'form-horizontal form-bordered', 'files' => true]) !!}
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								{!! Form::label('name','Nazwa',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Nazwa partnera']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('url','Strona internetowa',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('url', null,['class'=>'form-control', 'placeholder'=>'Adres strony internetowej']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('email','E-mail',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Adres e-mail']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('description','Opis',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Opis']) !!}
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
								{!! Form::label('image','Logo partnera',['class'=>'col-md-3 control-label']) !!}
								<div class="col-md-9">
									{!! Form::file('image', null,['class'=>'form-control', 'placeholder'=>'Logo partnera']) !!}
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
@endsection
