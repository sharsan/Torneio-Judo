@extends('admin')
@section('content')
<title>Finals</title>
<div class="container"> 
 <h3><center><th>Finalistas por escalões</th></center> </h3>

 <table class="table table-striped">  
   <thead>   <a href="{{URL::to('qlf')}}" title=""><h4>Ver Finalistas</h4></a>
    <thead>
      <thead>   <a href="{{URL::to('finalista/create')}}" title=""><h4> + Registrar final</h4></a>

        <tr>
          <th>ID</th> 
          <th>Nome do campeonato</th>
          <th>Escalão</th> 
          <th>1º lugar</th>
          <th>2º lugar</th>
{{--         <th>3º lugar</th>
  <th>3º lugar</th> --}}
  <th>Júri</th>
  <th>Criado em</th>
  <th>Actualizado em</th>  
</tr>
</thead>
<tbody>
  @foreach($finalista as $post)
  <tr>
    <td>{{$post['id']}}</td>
    <td>{{$post['torneio']}}</td>
    <td>{{$post['escalao']}}</td>
    <td>{{$post['primeiro']}}</td>
    <td>{{$post['segundo']}}</td>
{{--         <td>{{$post['terceiro']}}</td>
<td>{{$post['terceiro2']}}</td> --}}
<td>{{$post['juri']}}</td>
<td>{{$post['created_at']}}</td>
<td>{{$post['updated_at']}}</td> 


<td><a href="{{action('FinalistaController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
<td>
  <form action="{{action('FinalistaController@destroy', $post['id'])}}" method="post">
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