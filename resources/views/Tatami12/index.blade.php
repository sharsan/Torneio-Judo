@extends('admin')
@section('content')
<title>Grupo A</title>
<div class="container">  

 <table class="table table-striped">  
  <thead>   


   <thead><a href="{{URL::to('finalista')}}" title=""><h4>Ver final</h4></a></thead>
   <thead><a href="{{URL::to('terceiro')}}" title=""><h4>Ver 3º e 4º lugares</h4></a></thead>

   <center><h2> Competidores do grupo A</h2> </center> <br>
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
      <td>{{$post['atleta1']}}</td>
      <td>{{$post['escalao']}}</td>
      <td>{{$post['atleta2']}}</td> 
      <td>{{$post['sexo']}}</td>
      @endforeach
    </tbody> 
  </table>
  <center><h3> Vencedores do grupo A</h3></center>  
  <a href="{{URL::to('tatami12/create')}}" title=""><h4>+ Registrar outro vencedor de escalão do grupo A</h4></a> 
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
  @foreach($tatami12 as $post)
  <tr>
    <td>{{$post['id']}}</td> 
    <td>{{$post['torneio']}}</td>
    <td>{{$post['atleta1']}}</td>
    <td>{{$post['escalao']}}</td>
    <td>{{$post['atleta2']}}</td>
    <td>{{$post['sexo']}}</td>
    <td>{{$post['juri']}}</td>
    <td>{{$post['vencedor12']}}</td> 
   {{--    <td>{{$post['created_at']}}</td>
   <td>{{$post['updated_at']}}</td>  --}}


   <td><a href="{{action('Tatami12Controller@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
   <td>
    <form action="{{action('Tatami12Controller@destroy', $post['id'])}}" method="post">
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