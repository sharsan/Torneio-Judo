@extends('master')
@section('content')
        <title>Pagina inicial</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
 
    <body> 
           <div class="form-group row">
<center>
       <a href="{{URL::to('eventos')}}" title="" class="btn btn-warning">
            <h4>Eventos</h4></a> 

       <a href="{{URL::to('resultados')}}" title="" " class="btn btn-warning">
            <h4>Resultados</h4></a> 
           </div>
</center>
<center>
<img src="{{URL::asset('/image/judo.png')}}" alt="profile Pic" height="500" width="750">
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
    </body>
@endsection