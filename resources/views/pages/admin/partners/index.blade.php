@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions-buttons">
					<a  href="{{ url('admin/partners/create') }}" class="mb-xs mt-xs mr-xs btn btn-primary">Dodaj</a>
				</div>

				<h2 class="panel-title">{{  $header }}</h2>
			</header>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover mb-none">
						<thead>
							<tr>
								<th>Id</th>
								<th>Miniatura</th>
								<th>Nazwa</th>
								<th>WWW</th>
								<th>E-mail</th>
								<th>Opis</th>
								<th class="text-right">Akcja</th>
							</tr>
						</thead>
						<tbody>
							@foreach($partners as $partner)
							<tr>
								<td>{{ $partner->id }}</td>
								<td><img alt="{{  $partner->name }}" width="70" src="/uploads/partners/{{ $partner->image }}"></td>
								<td>{{ $partner->name }}</td>
								<td>{{ $partner->url }}</td>
								<td>{{ $partner->email }}</td>
								<td>{{ $partner->description }}</td>
								<td class="actions-hover actions-fade text-right">
									<a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edytuj"><i class="fa fa-pencil-square-o"></i></a>
									<a href="{{ action('PartnerController@destroy', $partner->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Usuń"><i class="fa fa-trash-o"></i></a>
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
