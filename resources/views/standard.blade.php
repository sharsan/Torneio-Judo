@extends('layouts.app')
@section('content')


<ul class="nav navbar-nav navbar-right"> 

	<li>
		<a href="{{ route('logout') }}"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
		Sair
	</a> 
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
</li>
</ul>  



<div class="panel-body">
	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
	@endif

</div>  
<div class="form-group row"><center>
	<a href="{{URL::to('eventos')}}" title="" class="btn btn-warning"><h4>Eventos</h4></a>

	<a href="{{URL::to('resultados')}}" title="" class="btn btn-warning"><h4>Resultados</h4></a> 
</center>  
</div>
</div> 
<center>
	<img src="{{URL::asset('/image/judo.png')}}" alt="profile Pic" height="500" width="750">
</center>
@endsection
