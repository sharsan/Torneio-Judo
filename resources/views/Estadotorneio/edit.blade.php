@extends('admin')
@section('content')
<title>Actualizando estado</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
<body>
  <div class="container"> 

    <h2>Editar estado</h2><br>

    <a href="{{URL::to('estado')}}" title=""><h4><- voltar</h4></a>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div><br>
   @endif

   @if (\Session::has('success'))
   <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
  </div><br>
  @endif
  <form method="post" action="{{action('EsttController@update', $id)}}">  
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH"> 

    <div class="row">
      <div class="form-group col-md-2">  

        <!-- Estado --> 
        <label for="estado"> Novo estado :</label>
        <input type="text" class="form-control" name="estado" placeholder="Ex: Anulado" value="{{$et->estado}}"></input> <br>
      </div>

      <div class="form-group col-md-5"> 


   {{--  <div class="form-group col-md-6"> 
      <!-- Torneio -->  

      <div class="col-md-8"> 
       <label for="torneio"> Nome do Torneio:<h3> {{$et->torneio}}</h3> 
        <select id="torneio" name="torneio">
          <option value="{{$et->torneio}}">{{$et->torneio}} </option>
        </select>  
      </label>  
    </div>    --}}

    <!-- Torneio --> 
    <label for="torneio"> Nome do Torneio:</label>
    <input type="text" class="form-control" name="torneio" placeholder="Ex: Campeonato Inter-provincial" value="{{$et->torneio}}"></input>
  </div>
</div>

<br> <br>

<div class="form-group col-md-4"> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>   
</div>
</div> 
</form> 
</div>
@endsection  