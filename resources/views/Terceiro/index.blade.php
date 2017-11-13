@extends('admin')
@section('content')
<title>Terceiro lugar</title>
<div class="container"> 
 <h3><center><th>Terceiro lugar</th></center> </h3>

 <a href="{{URL::to('grupo')}}" title=""><h4><- Fase de grupos</h4></a>
 <table class="table table-striped">  
  <thead>   <a href="{{URL::to('terceiro/create')}}" title=""><h4>Registrar uma final do 3º lugar</h4></a>
  </thead>
  <thead>
    <tr>
      <th>ID</th> 
      <th>Nome do campeonato</th>
      <th>Escalão</th> 
      <th>3º lugar</th> 
      <th>Júri</th>
      <th>Criado em</th>
      <th>Actualizado em</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($terceiro as $post)
    <tr>
      <td>{{$post['id']}}</td>
      <td>{{$post['torneio']}}</td>
      <td>{{$post['escalao']}}</td>
      <td>{{$post['terceiro']}}</td>  
      <td>{{$post['juri']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>{{$post['updated_at']}}</td> 


      <td><a href="{{action('TerceiroController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
      <td>
        <form action="{{action('TerceiroController@destroy', $post['id'])}}" method="post">
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