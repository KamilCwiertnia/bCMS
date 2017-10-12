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
				{!! Form::open(['action' => 'AdminUserController@store', 'method' => 'POST', 'class'=>'form-horizontal form-bordered']) !!}
				<div class="form-group">
					{!! Form::label('name','Imię',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-user"></i></span>
							</span>
							{!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Imię']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('surname','Nazwisko',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-user"></i></span>
							</span>
							{!! Form::text('surname', null,['class'=>'form-control', 'placeholder'=>'Nazwisko']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('email','Adres E-mail',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-envelope"></i></span>
							</span>
							{!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Adres E-mail']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('roles','Rola',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						{!! Form::select('roles[]', $roles, null, ['class' => 'form-control mb-md']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('password','Hasło',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-key"></i></span>
							</span>
							{!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Hasło']) !!}
						</div>
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('password_confirmation','Powtórz hasło',['class'=>'col-md-3 control-label']) !!}
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-key"></i></span>
							</span>
							{!! Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>'Powtórz hasło']) !!}
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
