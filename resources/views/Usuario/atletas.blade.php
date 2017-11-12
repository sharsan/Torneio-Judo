@extends('master')
@section('content')
<title>Atletas </title>
  <div class="container">
    <table class="table table-striped">  
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
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>
 
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection