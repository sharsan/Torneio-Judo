@extends('admin') 
@section('content')
<title>Adicionar torneio </title>
<div class="container"> 
  <h2>Registrar torneio</h2><br>
  <a href="{{URL::to('torneio')}}" title=""><h4><- voltar</h4></a>   

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

<form method="post" action="{{url('torneio')}}">

  {{csrf_field()}} 
  
  <div class="row">
    <div class="form-group col-md-6">   
     
     <!-- Nome do Evento -->
     <div class="col-md-12"> 
       <label for="nome"> Nome :
         <input type="text" class="form-control" name="nome" placeholder="Ex: Campeonato Lurdes Mutola"></input><br>
       </label>   
     </div>    
     <!-- Data inicial-->
     
     <div class="col-md-12"> 
       <label for="datai">Data inicial :
         <meta charset="utf-8"> 
         <meta name="datai" content="referrer"> 
         <input type="date" placeholder="Ex: 2017-10-29 01:10:43">  
       </label> 

       <!-- Data do termino -->
       
       <label for="datat">Data do termino :
        <meta charset="utf-8"> 
        <meta name="datat" content="width=device-width"> 
        <input type="date" placeholder="Ex: 2017-12-12 12:10:11"> 
      </label> 
    </div>
  </div>            
  
  <!-- Outros detalhes --> 

  <div class="form-group col-md-12">
    <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
     
      <br> <br><textarea name="descricao" rows="8" cols="80" placeholder="Ex: Campeonato alusivo ao aniversário da Ex Campeã Lurdes mutola..."></textarea> 
    </label>
  </div>

  <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar torneio</button>  
    <!-- -->
  </div>
</form>

@endsection