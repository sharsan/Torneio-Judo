@extends('admin')
@section('content')
<title>Adicionar vencedores do grupo B</title>
<div class="container"> 
  <h2>Registrar vencedores do grupo B do escalão</h2><br> 
  <a href="{{URL::to('tatami34')}}" title=""><h4>Resultados do grupo B</h4></a>  
  
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
   </ul>
 </div><br>
 @endif

 @if (\Session::has('success'))
 <div class="alert alert-success">
  <p>{{ \Session::get('success') }}</p>
</div><br>
@endif


<form method="post"  action="{{url('tatami34')}}"> 

  {{csrf_field()}}   
  <!-- <div class="row">   -->
   <div class="row">
    <div class="form-group col-md-8">   
     <!-- Nome do campeonato  -->  

     <div class="col-md-10"> <br> 
      <label for="torneio"> Nome do Torneio :
        <select id="torneio" name="torneio">

          @foreach($torneio as $tor)
          <option value="{{$tor->nome}}">{{$tor->nome}} </option>
          @endforeach
        </select>
      </label>    
    </div> 

    <!-- Escalao  -->  
    <div class="col-md-6"> <br>
     <!-- Escalao  --> 
     <label for="escalao">Escalão de peso : 
      <select id="escalao" name="escalao">

        @foreach($escalao as $esc)
        <option value="{{$esc->nome}}">{{$esc->nome}} </option>
        @endforeach   
      </select> 
    </label>  
  </div> 


  <!-- juri : -->
  <div class="col-md-8"> <br> 
    <label for="juri"> Júri :
      <select id="juri" name="juri">

        @foreach($arbitro as $arb)
        <option value="{{$arb->nome}}">{{$arb->nome}} </option>
        @endforeach
      </select>
    </label>    
  </div> 

  {{-- Sexo --}}

  <div class="col-md-5">  <br> 
    <label for="sexo">Sexo :
      <input type="radio" class="form-check-input" name="sexo" value="M" checked></input> 
      M
      <input class="form-check-input" type="radio" name="sexo" id="F" value="F"></input> 
      F
    </label> 
  </div>


  <div class="row"> 

   <div class="form-group col-md-8">    
     <h3>Selecione os atletas</h3>   
     <!-- 1º lugar -->

     <div class="col-md-10"> <br> 
      <label for="atleta3"> Atleta 1:
        <select id="atleta3" name="atleta3">

          @foreach($grupo as $grp)
          <option value="{{$grp->atleta3}}">{{$grp->atleta3}} </option>
          @endforeach
        </select>
      </label>       <b>  VS  </b>

      <!-- 2º lugar --> 
      <label for="atleta4"> Atleta 2:
       <select id="atleta4" name="atleta4">

        @foreach($grupo as $grp)
        <option value="{{$grp->atleta4}}">{{$grp->atleta4}} </option>
        @endforeach
      </select> 
    </label>
  </div>  
  <!-- vencedor34 -->
  <div class="col-md-10"> <br> 
    <label for="vencedor34"> Vencedor:
     <select id="vencedor34" name="vencedor34">

      @foreach($inscrito as $insc)
      <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
      @endforeach
    </select> 
  </label>
</div> 
<!-- Vencido -->
<div class="col-md-10"> <br> 
  <label for="vencido"> Vencido:
   <select id="vencido" name="vencido">

    @foreach($inscrito as $insc)
    <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
    @endforeach
  </select> 
</label>
</div>  
</div> 



<!-- Outros detalhes --> 

<div class="form-group col-md-12">
 <br> <label for="descricao" class="col-sm-4 col-form-label col-form-label-sm">Outros detalhes

  <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
</label>
</div>

<div class="form-group col-md-4"> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar luta</button>  
</div>
</form>




<table class="table table-striped">    

 <thead>
  <tr>
    <th>ID</th> 
    <th>Torneio</th> 
    <th>Atleta 1</th>
    <th>Escalão</th> 
    <th>Atleta 2</th> 
    <th>Júri</th>
    <th>Vencedor</th> 
  </tr>
</thead>

@foreach($tatami34 as $post)
<tr>
  <td>{{$post['id']}}</td> 
  <td>{{$post['torneio']}}</td>
  <td>{{$post['atleta3']}}</td>
  <td>{{$post['escalao']}}</td>
  <td>{{$post['atleta4']}}</td>
  <td>{{$post['juri']}}</td>
  <td>{{$post['vencedor34']}}</td>  
  @endforeach
</table>


<table class="table table-striped">  
  <thead>   

    <h3> Competidores do grupo B</h3>  
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

    @endsection 