@extends('admin')
@section('content')
<title>Categorias </title>

<div class="container"> 
  <h3><center><th>Categorias</th></center> </h3>
  <table class="table table-striped">  
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav> 

  <div class="col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Insira a palavra a pesquisar..." aria-label="pesquisar">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar!</button>
      </span>
    </div>
  </div>
  
    <div class="row">  <!--  este div inseri pra separa o Search com o restante -->
    <thead>    

    <div class="form-group col-md-4"> <br>
        <a href="{{URL::to('categoria/create')}}" title=""><h4>Adicionar categoria</h4></a> 
    </div>
 
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th> 
          <th>Criado em</th>
          <th>Actualizado em</th>  
        </tr>
      </thead>
      <tbody>
        @foreach($categoria as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td>{{$post['nome']}}</td> 
          <td>{{$post['created_at']}}</td>
          <td>{{$post['updated_at']}}</td> 

          
         <td><a href="{{action('CategoriaController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td> 
          
          <form action="{{action('CategoriaController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Apagar</button>
          </form>
        </td>
        </div>  <!--  este div inseri pra separa o Search com o restante -->

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection