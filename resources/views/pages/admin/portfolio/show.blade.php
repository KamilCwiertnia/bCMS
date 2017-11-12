@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<h2 class="panel-title">{{ $portfolio->name }}</h2>
			</header>
			<div class="panel-body ">
				<div class="row">
					<div class="col-md-12">
						<div class="portfolio-title">
							<div class="row">
								<div class="portfolio-nav-all col-md-1">
									<a href="{{ url('admin/portfolio') }}" data-tooltip data-original-title="Wróć do listy"><i class="fa fa-th"></i></a>
								</div>
								<div class="col-md-10 center">
									<h2 class="mb-none">{{ $portfolio->name }}</h2>
								</div>
							</div>
						</div>

						<hr class="tall">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
							<div>
								<span class="img-thumbnail">
									<img alt="" class="img-responsive" src="/uploads/projects/{{ $portfolio->preview }}">
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="portfolio-info">
							<div class="row">
								<div class="col-md-12 center">
									<ul>
										<li>
											<i class="fa fa-calendar"></i> {{ $portfolio->project_date }}
										</li>
										<li>
											<i class="fa fa-tags"></i> {{ $portfolio->categories->display_name }}
										</li>
									</ul>
								</div>
							</div>
						</div>

						<h5 class="mt-sm"><strong>Opis:</strong></h5>
						<div class="mt-xlg">{!! $portfolio->description !!}</div>

						<a href="{{ $portfolio->live_preview_url }}" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Zobacz na żywo</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

						<ul class="portfolio-details">
							<li>
								<h5 class="mt-sm mb-xs">Skills</h5>

								<ul class="list list-inline list-icons">
									@foreach($portfolio->skills as $skill)
									<li><i class="fa fa-check-circle"></i> {{ $skill->display_name}}</li>
									@endforeach

								</ul>
							</li>
							<li>
								<h5 class="mt-sm mb-xs">Klient</h5>
								<p>{{ $portfolio->client_name }}</p>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</section>
	</div>
</div>

@endsection
