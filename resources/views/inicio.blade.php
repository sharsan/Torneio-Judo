@extends('master')
<ul class="nav navbar-nav navbar-right">
 <!-- <ul class="nav navbar-nav navbar-right"> -->

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
@section('content')
<title>Home</title>
<div class="container"> 
  <div class="form-group row"><center>
    <a href="{{URL::to('atleta')}}" title="" class="btn btn-warning"><h4>Atletas</h4></a>  

    <a href="{{URL::to('treinador')}}" title="" class="btn btn-warning"><h4>Treinadores</h4></a> 

    <a href="{{URL::to('clube')}}" title="" class="btn btn-warning"><h4>Clubes</h4></a> 

    <a href="{{URL::to('arbitro')}}" title="" class="btn btn-warning"><h4>Árbitros</h4></a> 

    {{-- <a href="{{URL::to('torneio')}}" title="" class="btn btn-warning"><h4>Torneios</h4></a> --}} 
    <a href="{{URL::to('et')}}" title="" class="btn btn-warning"><h4>Torneios</h4></a> 

    <a href="{{URL::to('inscrito')}}" title="" class="btn btn-warning"><h4>Inscrições</h4></a> 
    
    <a href="{{URL::to('grupo')}}" title="" class="btn btn-warning"><h4>Grupos</h4></a> 
    <a href="{{URL::to('luta')}}" title="" class="btn btn-warning"><h4>Ver registros de lutas</h4></a>  

    <a href="{{URL::to('finalista')}}" title="" class="btn btn-warning"><h4>Resultados</h4></a>  

  </center>  
</div>
</div> 
<center>
 <img src="{{URL::asset('/image/kids.png')}}" alt="profile Pic" height="600" width="900">
</center>
<footer> 
  <h4>
    <p> 
      <marquee> 
       Desenvolvido por:  Fortunato Samo, Isaac Badrú e João Machiana
     </marquee>
   </p> 
 </h4>
</footer> 
@yield('content') 
@endsection