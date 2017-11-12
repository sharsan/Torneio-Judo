@extends('admin')
@section('content')
<title>Registrar competidor </title>
<div class="container">
  <h2>Registrar competidor</h2><br> 
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
  <p>{{ \Session::get('success') }}</p>
</div><br>
@endif

<form method="post" action="{{url('inscrito')}}">
  <div class="form-group row">
    {{csrf_field()}} 

    
    <div class="row"> 
     <!-- Nome -->
     <div class="col-md-16">
      <label for="atleta">Nome :
        <input type="text" class="form-control" name="atleta"></input> 
      </label>
    </div>
  </div>
  <!-- NomeTorneio -->
  <div class="col-md-16">
    <label for="torneio">Torenio :
      <input type="text" class="form-control" name="torneio"></input> 
    </label>
  </div>
</div>
<!-- Escalao -->

<div class="col-md-10"> <br> 
  <label for="escalao">Escalão de peso :
    <select id="escalao" name="escalao">
      
      @foreach($escalao as $esc)
      <option value="{{$esc->nome}}">{{$esc->nome}} </option>
      @endforeach
    </select>
  </label>    
</div>  
<!-- Outros detalhes --> 

<div class="form-group col-md-12">
  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
    <br>
    <textarea name="nota" rows="8" cols="80"></textarea> 
  </label>
</div>

<div class="form-group col-md-4"><br>
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar competidor</button>  
  <!-- -->
</div>
</form>

@endsection