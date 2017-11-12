@extends('admin')
@section('content')
<title>Luta final </title>
<div class="container"> 
  <h2>Registrar final</h2><br> 
  <a href="{{URL::to('finalista')}}" title=""><h4><- voltar</h4></a>
  
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

<form method="post"  action="{{url('finalista')}}">

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

    
    <div class="row"> 

     <div class="form-group col-md-8">    
       <h3>Selecione os finalistas</h3>   
       <!-- 1º lugar -->

       <div class="col-md-10"> <br> 
        <label for="vencedor12"> Atleta 1:
          <select id="vencedor12" name="vencedor12">

            @foreach($luta12 as $luta)
            <option value="{{$luta->vencedor}}">{{$luta->vencedor}} </option>
            @endforeach
          </select>
        </label>    
      </div> 
      <!-- 2º lugar -->
      <div class="col-md-10"> 
        <label for="vencedor34"> Atleta 2:
         <select id="vencedor34" name="vencedor34">

          @foreach($luta34 as $luta)
          <option value="{{$luta->vencedor}}">{{$luta->vencedor}} </option>
          @endforeach
        </select> 
      </label>
    </div>  
    <!-- Vencedor -->
    <div class="col-md-10"> 
      <label for="vencedor"> Vencedor:
       <select id="vencedor" name="vencedor">

        @foreach($inscrito as $insc)
        <option value="{{$insc->atleta}}">{{$insc->atleta}} </option>
        @endforeach
      </select> 
    </label>
  </div> 
  <!-- Vencido -->
  <div class="col-md-10"> 
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
 <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes

  <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
</label>
</div>

<div class="form-group col-md-4"> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar finalistas</button>  
</div>
</form>

@endsection 