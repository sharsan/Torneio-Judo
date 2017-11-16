@extends('admin')
@section('content')
<title>Qualificacoes</title>
<div class="container"> 
 <h3><center><th>Qualificações</th></center> </h3>

 <a href="{{URL::to('grupo')}}" title=""><h4><- Fase de grupos</h4></a>
 <table class="table table-striped">  
  <thead>   <a href="{{URL::to('qualificacoes/create')}}" title=""><h4>+ adicionar finalistas</h4></a>


   <thead>
    <tr>
      <th>ID</th> 
      <th>Torneio</th> 
      <th>Escalão</th> 
      <th>1º Lugar</th>
      <th>2º Lugar</th> 
      <th>3º Lugar</th>
      <th>Júri</th>
      <th>Criado em</th>
      <th>Actualizado em</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($qualificacoes as $post)
    <tr>
      <td>{{$post['id']}}</td> 
      <td>{{$post['torneio']}}</td>
      <td>{{$post['escalao']}}</td>
      <td>{{$post['primeiro']}}</td>
      <td>{{$post['segundo']}}</td> 
      <td>{{$post['terceiro']}}</td> 
      <td>{{$post['juri']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>{{$post['updated_at']}}</td> 


      <td><a href="{{action('QualificacoesController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
      <td>
        <form action="{{action('QualificacoesController@destroy', $post['id'])}}" method="post">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Apagar</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection