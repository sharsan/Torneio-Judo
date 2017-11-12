@extends('admin')
@section('content')
<title>Competicoes </title>
<div class="container"> 
  <h2>Registrar luta</h2><br> 
  <a href="{{URL::to('luta12')}}" title=""><h4><- voltar</h4></a>
  
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

<form method="post"  action="{{url('luta12')}}">

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
       <h3>Selecionea os atletas</h3>   
       <!-- 1º lugar -->
       
       <div class="col-md-10"> <br> 
        <label for="primeiro"> 1º lugar:
          <select id="primeiro" name="primeiro">
            
            @foreach($atleta as $atl)
            <option value="{{$atl->nome}}">{{$atl->nome}} </option>
            @endforeach
          </select>
        </label>    
      </div> 
      <!-- 2º lugar -->
      <div class="col-md-10"> 
        <label for="segundo"> 2º lugar:
         <select id="segundo" name="segundo">
          
          @foreach($atleta as $atl)
          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
          @endforeach
        </select> 
      </label>
    </div> 
    <!-- 3º lugar -->
    <div class="col-md-10"> 
      <label for="terceiro"> 3º lugar:
        <select id="terceiro" name="terceiro">
          
          @foreach($atleta as $atl)
          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
          @endforeach
        </select> 
      </label>
    </div>
    <!-- 3º lugar -->
    <div class="col-md-10"> 
      <label for="terceiro2"> 3º lugar:
        <select id="terceiro2" name="terceiro2">
          
          @foreach($atleta as $atl)
          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
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
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar luta</button>  
</div>
</form>

@endsection 