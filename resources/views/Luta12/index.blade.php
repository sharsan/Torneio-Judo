@extends('admin')
@section('content')
<title>Grupo A</title>
<div class="container"> 
 <h3><center><th>Lutas do grupo A </th></center> </h3>

 <table class="table table-striped">  
  <thead>   <a href="{{URL::to('luta12/create')}}" title=""><h4>+ Registrar outro vencedor de luta</h4></a>   


   <thead><a href="{{URL::to('finalista')}}" title=""><h4>Ver final</h4></a></thead>
   <thead><a href="{{URL::to('terceiro')}}" title=""><h4>Ver 3º e 4º lugares</h4></a></thead>
   <thead>
    <tr>
      <th>ID</th> 
      <th>Torneio</th> 
      <th>Escalão</th> 
      <th>Atleta 1</th>
      <th>Atleta 2</th> 
      <th>Júri</th>
      <th>Vencedor</th>
      <th>Criado em</th>
      <th>Actualizado em</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($luta12 as $post)
    <tr>
      <td>{{$post['id']}}</td> 
      <td>{{$post['torneio']}}</td>
      <td>{{$post['escalao']}}</td>
      <td>{{$post['atleta1']}}</td>
      <td>{{$post['atleta2']}}</td>
      <td>{{$post['juri']}}</td>
      <td>{{$post['vencedor']}}</td> 
      <td>{{$post['created_at']}}</td>
      <td>{{$post['updated_at']}}</td> 


      <td><a href="{{action('Luta12Controller@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
      <td>
        <form action="{{action('Luta12Controller@destroy', $post['id'])}}" method="post">
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