@extends('admin')
@section('content')
<title>Estado dos torneios</title>

<div class="container"> 
  <h3><center><th>Estados dos torneios</th></center> </h3>
  <table class="table table-striped">  
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
      <!-- Navbar content -->
    </nav> 

    <a href="{{URL::to('et/create')}}" title=""><h4><- voltar</h4></a> 
    <div class="col-lg-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Insira a palavra a pesquisar..." aria-label="pesquisar">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Buscar!</button>
        </span>
      </div>
    </div>

    <div class="row">  <!--  este div inseri pra separar o Search com o restante -->
      <thead>    

        <div class="form-group col-md-4"> <br>
          <a href="{{URL::to('et/create')}}" title=""><h4>Adicionar estado de um torneio</h4></a> 
          <a href="{{URL::to('torneio/create')}}" title=""><h4>Adicionar torneio</h4></a> 
        </div>

        <thead>
          <tr>
            <th>ID</th>
            <th>Torneio</th> 
            <th>Estado</th> 
            <th>Criado em</th>
            <th>Actualizado em</th>  
          </tr>
        </thead>
        <tbody>
          @foreach($et as $post)
          <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['torneio']}}</td> 
            <td>{{$post['estado']}}</td> 
            <td>{{$post['created_at']}}</td>
            <td>{{$post['updated_at']}}</td> 


            <td><a href="{{action('EsttController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
            <td> 

              <form action="{{action('EsttController@destroy', $post['id'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Apagar</button>
              </form>
            </td>
          </div>  <!--  este div inseri pra separar o Search com o restante -->

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection