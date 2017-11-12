@extends('admin')
@section('content')
   <title>Actualizando torneio </title>    
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
  <body>
<div class="container">
      <h2>Editar torneio</h2> 
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
                        <!-- <p>{{ \Session::get('success') }}</p> -->
                     <p>{{URL::to('torneio')}}</p>       
                   </div><br>
               @endif  
  <form method="post" action="{{action('TorneioController@update', $id)}}">
        {{csrf_field()}} 
      <input name="_method" type="hidden" value="PATCH"> 

                          
        <div class="row">
          <div class="form-group col-md-6">   
             
                                     <!-- Nome do Evento -->
            <div class="col-md-12">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" name="nome"value="{{$torneio->nome}}"></input><br>
           </div> 
                                        <!-- Data inicial-->
        
            <div class="col-md-6"> 
            <label for="datai">Data do evento  :
              <meta charset="character_set">
              <meta name="viewport" content="width=device-width"> 
              <input type="date" placeholder="Ex: 2017-10-29 01:10:43" value="{{$torneio->datai}}"> 
          </label> 
                                       <!-- Data do termino -->
          
            <label for="datat">Data do termino :
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width"> 
              <input type="date" placeholder="Ex: 2017-12-12 12:10:11" value="{{$torneio->datat}}"> 
          </label>
           </div> 
                                    <!-- Outros detalhes --> 
      
      <div class="col-md-12"> 
          <br>  <label for="descricao">Outros detalhes :
                
               <br><br>  <textarea name="descricao" rows="8" cols="90">{{$torneio->descricao}}</textarea> 
            </label>
             
    <div class="form-group row"><br> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
    </div>
  </form>
</div>
@endsection