@extends('admin')
@section('content')
<title>Actualizando competidor </title>    
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <h2>Editar competidor</h2> 
    <a href="{{URL::to('inscrito')}}" title=""><h4><- voltar</h4></a>   

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
    <!-- <p>{{ \Session::get('success') }}</p> -->
    <p>{{URL::to('inscrito')}}</p>       
  </div><br>
  @endif  
  <form method="post" action="{{action('InscritoController@update', $id)}}">
    {{csrf_field()}} 
    <input name="_method" type="hidden" value="PATCH"> 

    
    <div class="row">
      <div class="form-group col-md-6">   
       
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
      <!-- Nome do Competidor -->

      <div class="col-md-10"> <br> 
       <label for="atleta"> Nome do Competidor: 
        <select id="atleta" name="atleta">
          
          @foreach($atleta as $atl)
          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
          @endforeach
        </select>
      </label>    
    </div>
    <!-- Escalao  --> 
    <div class="col-md-10"> <br> 
      <label for="escalao">Escalão de peso :
        <select id="escalao" name="escalao">
          
          @foreach($escalao as $esc)
          <option value="{{$esc->nome}}">{{$esc->nome}} </option>
          @endforeach
        </select>
      </label>    
    </div> 
  </div>  
  

  <!-- Data inicial-->
</div>   
<div class="col-md-6"> 
  <label for="datai">Data do evento  :
    <meta charset="character_set">
    <meta name="viewport" content="width=device-width"> 
    <input type="date">
  </label> 
  <!-- Data do termino -->
  
  <label for="datat">Data do termino :
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"> 
    <input type="date">
  </label>
</div> 
<!-- Outros detalhes --> 

<div class="col-md-12"> 
  <br>  <label for="descricao">Outros detalhes :
    
   <br><br>  <textarea name="descricao" rows="8" cols="90">{{$inscrito->descricao}}</textarea> 
 </label>
 
 <div class="form-group row"><br> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
</div>
</form>
</div>
@endsection