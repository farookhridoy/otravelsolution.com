@if(Session::has('danger'))
<div class="alert alert-danger fade show" role="alert" style="margin-bottom: 0;">
	<span class="close" data-dismiss="alert">×</span>
	{{Session::get('danger')}}
</div>
@endif

@if(Session::has('message'))
<div class="alert alert-success" role="alert" style="margin-bottom: 0;">
	<span class="close" data-dismiss="alert">×</span>
	{{Session::get('message')}}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
	<span class="close" data-dismiss="alert">×</span>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif