@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions-buttons">
					<a  href="{{ url('admin/portfolio/create') }}" class="mb-xs mt-xs mr-xs btn btn-primary">Dodaj</a>
				</div>

				<h2 class="panel-title">{{  $header }}</h2>
			</header>

			<div class="panel-body ">
				<div class="media-gallery">
					<div class="mg-files">
						@foreach($portfolios as $portfolio)
						<div class="col-sm-2 col-md-2">
							<div class="thumbnail">
								<div class="thumb-preview">
									<a class="thumb-image" href="/uploads/projects/miniature/{{ $portfolio->miniature }}">
										<img src="/uploads/projects/miniature/{{ $portfolio->miniature }}" class="img-responsive" alt="Project">
									</a>
									<div class="mg-thumb-options">
										<a href="{{ url('admin/portfolio', $portfolio->id) }}" class="mg-zoom"><i class="fa fa-info"></i></a>
										<div class="mg-toolbar">
											<div class="text-right">
												<a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edytuj"><i class="fa fa-pencil-square-o"></i></a> 
												<a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Usuń"><i class="fa fa-trash-o"></i></a> 
												
											</div>
										</div>
									</div>
								</div>

								<h5 class="mg-title text-weight-semibold">{{ $portfolio->name }}</h5>
								<div class="mg-description">
									<small class="pull-left text-muted">type</small>
									<small class="pull-right text-muted">{{ $portfolio->project_date }}</small>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

@endsection
