@extends('layouts.back')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions-buttons">
					<a  href="{{ url('admin/users/create') }}" class="mb-xs mt-xs mr-xs btn btn-primary">Dodaj nowy projekt</a>
				</div>

				<h2 class="panel-title">{{  $header }}</h2>
			</header>
			<div class="panel-body">
				<div class="table-responsive">

					</div>
				</div>
			</section>
		</div>
	</div>

	@endsection
