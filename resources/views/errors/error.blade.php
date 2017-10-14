<div class="row">
	<div class="col-lg-12">
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>  
		</div>
		@endif
		@if(Session::has('message_success'))
		<div class="alert alert-success">
			{{ Session::get('message_success') }}
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		</div>
		@endif
		@if(Session::has('message_error'))
		<div class="alert alert-danger">
			{{ Session::get('message_error') }}
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		</div>
		@endif
	</div>
</div>