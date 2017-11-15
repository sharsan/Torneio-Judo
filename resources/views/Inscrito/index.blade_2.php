@extends('admin')
@section('content')
<title>Inscritos</title>
<div class="container">
  <h3><center><th>Lista de inscritos</th></center> </h3>
  <table class="table table-striped"> 
    <a href="{{URL::to('inscrito/create')}}" title=""><h4>Adicionar competidor</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Atleta</th>
        <th>Torneio</th> 
        <th>Escalão</th>  
        <th>Criado em</th>
        <th>Actualizado em</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($inscrito as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['atleta']}}</td>
        <td>{{$post['torneio']}}</td> 
        <td>{{$post['escalao']}}</td>  
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <td><a href="{{action('InscritoController@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
          <form action="{{action('InscritoController@destroy', $post['id'])}}" method="post">
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