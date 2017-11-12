@extends('master') 
@section('content')
<title>Vencedores</title>
<div class="container"> 
   <a href="{{URL::to('usuario')}}" title=""><h4>Inicio</h4></a> 
 <h3><center><th>Vencedores por escalões</th></center> </h3>
 <a href="{{URL::to('usuario')}}" title=""><h4><- voltar</h4></a> 
  <table class="table table-striped">   </a>
      <thead>
        <tr>

          <th>Nome do campeonato</th> 
          <th>Escalão</th>
          <th>1º lugar</th>
          <th>2º lugar</th>
          <th>3º lugar</th>
          <th>3º lugar</th>
          <th>Júri</th>
          <th>Criado em</th>
          <th>Actualizado em</th>  
        </tr>
      </thead>
      <tbody>
        @foreach($vencedor as $post)
        <tr>
          <td>{{$post['nome']}}</td> 
          <td>{{$post['escalao']}}</td>
          <td>{{$post['primeiro']}}</td>
          <td>{{$post['segundo']}}</td>
          <td>{{$post['terceiro']}}</td>
          <td>{{$post['terceiro2']}}</td>
          <td>{{$post['juri']}}</td>
          <td>{{$post['created_at']}}</td>
          <td>{{$post['updated_at']}}</td>  
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection