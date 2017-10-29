@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions-buttons">
					<a  href="{{ url('admin/category-portfolio/create') }}" class="mb-xs mt-xs mr-xs btn btn-primary">Dodaj</a>
				</div>

				<h2 class="panel-title">{{  $header }}</h2>
			</header>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover mb-none">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nazwa</th>
								<th>Wyświetlana nazwa</th>
								<th>Opis</th>
								<th class="text-right">Akcja</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td>{{  $category->id }}</td>
								<td>{{  $category->name }}</td>
								<td>{{  $category->display_name }}</td>
								<td>{{  $category->description }}</td>
								<td class="actions-hover actions-fade text-right">
									<a href="{{ action('CategoryPortfolioController@edit', $category->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edytuj"><i class="fa fa-pencil-square-o"></i></a>
									<a href="{{ action('CategoryPortfolioController@destroy', $category->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Usuń"><i class="fa fa-trash-o"></i></a>
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
