@extends('admin')
@section('content')
<title>Adicionar estado</title>
<div class="container"> 
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 <h2>Registrar novo tipo de estado</h2><br>
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

<form method="post" action="{{url('estado')}}">
  {{csrf_field()}}
  <!-- Nome -->
  <div class="row">     
    <div class="form-group col-md-8">
     <div class="col-md-6">
      <label for="nome">Novo estado :<br> 
        <input type="text" class="form-control" name="nome" placeholder="Ex: Anulado">  
      </input>
    </label>
  </div>   


  <div class="col-md-12"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar estado</button>   
  </div>
</div>
</div>
</form> 
</div>
@endsection 