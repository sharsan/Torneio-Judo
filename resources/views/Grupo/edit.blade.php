@extends('admin')
@section('content')
<title>Actualizando grupos </title>
<div class="container"> 
  <h2>Registrar grupo</h2><br> 
  <a href="{{URL::to('grupo')}}" title=""><h4><- voltar</h4></a>

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

<form method="post" action="{{action('GrupoController@update', $id)}}"> 
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PATCH">   

  <div class="row">
    <div class="form-group col-md-8">   


      <!--  Nome do Torneio : -->  

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
      <div class="col-md-10"> <br> 
        <label for="escalao">Escalão de peso :
          <select id="escalao" name="escalao">

            @foreach($escalao as $esc)
            <option value="{{$esc->nome}}">{{$esc->nome}} </option>
            @endforeach
          </select>
        </label>    
      </div> 

      <!-- juri : -->
      <div class="col-md-10"> <br> 
        <label for="juri"> Júri :
          <select id="juri" name="juri">

            @foreach($arbitro as $arb)
            <option value="{{$arb->nome}}">{{$arb->nome}} </option>
            @endforeach
          </select>
        </label>    
      </div> 



      <label> 
       <a href="{{URL::to('inscrito/create')}}" title=""><h4>+ Adicionar competidor</h4></a>
     </label>   
     <div class="col-md-10"> <br> 
      <label for="atleta1"> Atleta 1 :
        <select id="atleta1" name="atleta1">

          @foreach($inscrito as $insc)
          <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
          @endforeach
        </select> 
      </label>    
    </div> 
    <!-- competidor B -->
    <div class="col-md-10"> 
      <label for="atleta2"> Atleta 2 :
       <select id="atleta2" name="atleta2">

        @foreach($inscrito as $insc)
        <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
        @endforeach
      </select> 
    </label>
  </div> 
  <!-- competidor C -->
  <div class="col-md-10"> 
    <label for="atleta3"> Atleta 3 :
      <select id="atleta3" name="atleta3">

        @foreach($inscrito as $insc)
        <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
        @endforeach
      </select> 
    </label>
  </div>
  <!-- competidor D -->
  <div class="col-md-10"> 
    <label for="atleta4"> Atleta 4 :
      <select id="atleta4" name="atleta4">

        @foreach($inscrito as $insc)
        <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
        @endforeach
      </select> 
    </label>
  </div>
</div> 


<!-- Outros detalhes --> 

<div class="form-group col-md-12">
 <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes

  <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
</label>
</div>

<div class="form-group col-md-4"> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar grupo</button>  
</div>
</form>

@endsection 