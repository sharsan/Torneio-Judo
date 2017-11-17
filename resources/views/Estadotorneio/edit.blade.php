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
      
      <!-- Nome do Torneio -->
      <div class="col-md-12"> 
        <br>
        <label for="torneio"> Torneio:  
          <select id="torneio" name="torneio">

            @foreach($torneio as $trn)
            <option value="{{$trn->nome}}">{{$trn->nome}} </option>
            @endforeach
          </select>
        </label>   
      </div> 


      <!-- Estado -->
      <div class="col-md-12"> 
        <br>
        <label for="estado"> Estado:  
          <select id="estado" name="estado">

            @foreach($estado as $est)
            <option value="{{$est->nome}}">{{$est->nome}} </option>
            @endforeach
          </select>
        </label>   
      </div> 

      <div class="form-group col-md-4"> 
        <br> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>   
      </div>
    </div> 
  </form> 
</div>
@endsection  