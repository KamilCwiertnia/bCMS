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
									<a href="portfolio-single-small-slider.html" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></a>
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
									<img alt="" class="img-responsive" src="img/projects/project-1.jpg">
								</span>
							</div>
							<div>
								<span class="img-thumbnail">
									<img alt="" class="img-responsive" src="img/projects/project-1-2.jpg">
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
											<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<h5 class="mt-sm">Project Description</h5>
						<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

						<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

						<ul class="portfolio-details">
							<li>
								<h5 class="mt-sm mb-xs">Skills</h5>

								<ul class="list list-inline list-icons">
									<li><i class="fa fa-check-circle"></i> Design</li>
									<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
									<li><i class="fa fa-check-circle"></i> Javascript</li>
									<li><i class="fa fa-check-circle"></i> Backend</li>
								</ul>
							</li>
							<li>
								<h5 class="mt-sm mb-xs">Client</h5>
								<p>Okler Themes</p>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</section>
	</div>
</div>

@endsection
