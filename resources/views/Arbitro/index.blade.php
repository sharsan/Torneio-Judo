@extends('admin')
@section('content')
<title>Arbitros </title>
  <div class="container"> 
  <h3><center><th>Árbitros</th></center> </h3>

    <table class="table table-striped"> 
  <a href="{{URL::to('arbitro/create')}}" title=""><h4>Adicionar arbitro</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th> 
        <th>Apelido</th> 
        <th>Sexo</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>email</th> 
        <th>Criado em</th>
        <th>Actualizado em</th>
       <!-- <th colspan="2">Action</th>-->  
      </tr>
    </thead>
    <tbody>
      @foreach($arbitro as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nome']}}</td>
        <td>{{$post['apelido']}}</td> 
        <td>{{$post['sexo']}}</td>
        <td>{{$post['idade']}}</td> 
        <td>{{$post['telefone']}}</td>
        <td>{{$post['email']}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <td><a href="{{action('ArbitroController@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
          <form action="{{action('ArbitroController@destroy', $post['id'])}}" method="post">
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