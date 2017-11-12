@extends('admin')
@section('content')
<title>Atletas </title>
<div class="container">
  <h3><center><th>Atletas</th></center> </h3>
  <input type="text" maxlength="40" size="50" id="filtro-nome" class="form-control" onkeyup="filtrar(); mostrarLinhas();" placeholder="Pesquise pelo nome"></input>



  <form method="GET">
    <input type="text" name="name">
    <input type="checkbox" name="hasCoffeeMachine" value="1"><span> Apply Filter</span>
  </form>
  
  <table class="table table-striped" id="minhaTabela"> 
    <a href="{{URL::to('atleta/create')}}" title=""><h4>Adicionar atleta</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th> 
        <th>Apelido</th>
        <th>Cinturao</th>
        <th>Clube</th>
        <th>Categoria</th>
        <th>Escalão</th>
        <th>Ultima pesagem</th>
        <th>Sexo</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>email</th> 
        <th>Treinador</th> 
        <th>Criado em</th>
        <th>Actualizado em</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($atleta as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nome']}}</td>
        <td>{{$post['apelido']}}</td>
        <td>{{$post['cinturao']}}</td>
        <td>{{$post['clube']}}</td>
        <td>{{$post['categoria']}}</td>
        <td>{{$post['escalao']}}</td>
        <td>{{$post['peso']}}</td>
        <td>{{$post['sexo']}}</td>
        <td>{{$post['idade']}}</td> 
        <td>{{$post['telefone']}}</td>
        <td>{{$post['email']}}</td> 
        <td>{{$post['treinador']}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <td><a href="{{action('AtletaController@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
          <form action="{{action('AtletaController@destroy', $post['id'])}}" method="post">
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