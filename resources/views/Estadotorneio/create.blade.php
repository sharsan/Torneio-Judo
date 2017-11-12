@extends('admin')
@section('content')
<title>Registrar estado do Torneio</title>
<div class="container"> 
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 <h2>Registrar estado do Torneio</h2><br>
 <a href="{{URL::to('et')}}" title=""><h4><- voltar</h4></a>

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

<form method="post" action="{{url('et')}}">
  {{csrf_field()}}
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

  <div class="col-md-12"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar estado</button>   
  </div>
</div>
</div>
</form> 
</div>
@endsection 