@extends('admin')
@section('content')
<title>Actualizando escalão</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
<body>
  <div class="container">
    <h2>Editar escalão</h2><br>
    <a href="{{URL::to('escalao')}}" title=""><h4><- voltar</h4></a>


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
    <p>{{URL::to('escalao')}}</p>
  </div><br>
  @endif
  <form method="post" action="{{action('EscalaoController@update', $id)}}"> 
    {{csrf_field()}}
    
    <input name="_method" type="hidden" value="PATCH">  
    <!-- Nome --> 

    <div class="col-md-2">
      <label for="nome"> Escalão :</label>
      <input type="text" class="form-control" name="nome"placeholder="Ex: -40 "value="{{$escalao->nome}}">
    </input>

  </div>  
  <div class="col-md-12">  <br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
  </div>
</form>
</div>
@endsection