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
				{!! Form::model($categories, ['method'=>'PATCH','class'=>'form-horizontal', 'action'=>['CategoryPortfolioController@update', $categories->id]]) !!}
				<div class="form-group">
					{!! Form::label('name','Nazwa',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-terminal "></i></span>
							</span>
							{!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Nazwa']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('display_name','Wyświetlana nazwa',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-terminal "></i></span>
							</span>
							{!! Form::text('display_name', null,['class'=>'form-control', 'placeholder'=>'Wyświetlana nazwa']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('description','Opis',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							{!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Opis']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						{!! Form::submit('Dodaj',['class'=>'btn btn-primary']) !!}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</section>
	</div>
</div>


@endsection
