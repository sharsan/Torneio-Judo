@extends('admin')
@section('content')
<title>Torneios </title>
<div class="container">
  <h3><center><th>Torneiros</th></center> </h3>
  <table class="table table-striped"> 
    <a href="{{URL::to('torneio/create')}}" title=""><h4>Adicionar torneio</h4></a>
    <a href="{{URL::to('et')}}" title=""><h4>Ver estado dos torneios</h4></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>Evento</th> 
        <th>Inicio</th>
        <th>Término</th> 
        <th>Criado em</th>
        <th>Actualizado em</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($torneio as $post)
      <tr>
        
        <td>{{$post['id']}}</td>
        <td>{{$post['nome']}}</td> 
        <td>{{$post['datai']}}</td>
        <td>{{$post['datat']}}</td> 
        <td>{{$post['created_at']}}</td>
        <td>{{$post['updated_at']}}</td>

        <!-- <td><a href="{{action('EsttController@index', $post['id'])}}" class="btn btn-success">Estado</a></td> -->
        <td><a href="{{action('TorneioController@edit', $post['id'])}}" class="btn btn-success">Editar</a></td>
        <td>
          <form action="{{action('TorneioController@destroy', $post['id'])}}" method="post">
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