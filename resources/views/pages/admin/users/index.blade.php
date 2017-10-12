@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions-buttons">
					<a  href="{{ url('admin/users/create') }}" class="mb-xs mt-xs mr-xs btn btn-primary">Dodaj użytkownika</a>
				</div>

				<h2 class="panel-title">{{  $header }}</h2>
			</header>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover mb-none">
						<thead>
							<tr>
								<th>Id</th>
								<th>Avatar</th>
								<th>Imię</th>
								<th>E-mail</th>
								<th>Rola</th>
								<th>Ostatnie logowanie</th>
								<th>Data rejestracji</th>
								<th class="text-right">Akcja</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							@if($user == Auth::check())
							<tr >
								@else
								<tr>
									@endif
									<td>{{  $user->id }}</td>
									<td><img alt="{{  $user->login }}" width="40" src="/uploads/avatars/{{ $user->avatar }}"></td>
									<td>{{  $user->name }}</td>
									<td>{{  $user->email }}</td>
									<td>
										@foreach($user->roles as $role)
										{{ $role->display_name }}
										@endforeach
									</td>
									<td>
										@foreach($user->loginlogs as $log)
										@if($loop->first)
										{{ $log->last_login }}
										@endif
										@endforeach
									</td>
									<td>{{ $user->created_at }}</td>
									<td class="actions-hover actions-fade text-right">
										<a href="{{ url('admin/users', $user->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pokaż"><i class="fa fa-info"></i></a>
										<a href="{{ action('AdminUserController@edit', $user->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edytuj"><i class="fa fa-pencil-square-o"></i></a>
										<a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Usuń"><i class="fa fa-trash-o"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>

	@endsection
