@extends('admin')
@section('content')
<title>Grupo B</title>
<div class="container">  
 <table class="table table-striped">  
  <thead>   


   <thead><a href="{{URL::to('finalista')}}" title=""><h4>Ver final</h4></a></thead>
   <thead><a href="{{URL::to('terceiro')}}" title=""><h4>Ver 3º e 4º lugares</h4></a></thead>

   <center><h2> Competidores do grupo B</h2> </center> <br>
   <thead>
    <tr>
      <th>ID</th> 
      <th>Torneio</th> 
      <th>Atleta 1</th>
      <th>Escalão</th> 
      <th>Atleta 2</th> 
      <th>Sexo</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($grupo as $post)
    <tr>
      <td>{{$post['id']}}</td> 
      <td>{{$post['torneio']}}</td>
      <td>{{$post['atleta3']}}</td>
      <td>{{$post['escalao']}}</td>
      <td>{{$post['atleta4']}}</td> 
      <td>{{$post['sexo']}}</td>
      @endforeach
    </tbody> 
  </table> 
  <center><h3> Vencedores do grupo B</h3></center>

  <a href="{{URL::to('luta34/create')}}" title=""><h4>+ Registrar outro vencedor do escalão B</h4></a> 
  <table class="table table-striped">   

   <thead>
    <tr>
      <th>ID</th> 
      <th>Torneio</th> 
      <th>Atleta 1</th>
      <th>Escalão</th>
      <th>Atleta 2</th>  
      <th>Sexo</th> 
      <th>Júri</th>
      <th>Vencedor</th>
   {{--    <th>Criado em</th>
    <th>Actualizado em</th>   --}}
  </tr>
</thead>
<tbody>
  @foreach($luta34 as $post)
  <tr>
    <td>{{$post['id']}}</td> 
    <td>{{$post['torneio']}}</td>
    <td>{{$post['atleta3']}}</td>
    <td>{{$post['escalao']}}</td>
    <td>{{$post['atleta4']}}</td>
    <td>{{$post['sexo']}}</td>
    <td>{{$post['juri']}}</td>
    <td>{{$post['vencedor34']}}</td> 
   {{--    <td>{{$post['created_at']}}</td>
   <td>{{$post['updated_at']}}</td>  --}}



   <td><a href="{{action('Luta34Controller@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
   <td>
    <form action="{{action('Luta34Controller@destroy', $post['id'])}}" method="post">
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