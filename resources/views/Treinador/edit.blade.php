@extends('admin')
@section('content')
    <title>Actualizando treinador </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Treinador</h2> 
  <a href="{{URL::to('treinador')}}" title=""><h4><- voltar</h4></a>

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
                        <p>{{URL::to('treinador')}}</p>
                   </div><br>
               @endif
          
  <form method="post" action="{{action('TreinadorController@update', $id)}}">

    {{csrf_field()}}  
     <input name="_method" type="hidden" value="PATCH">                   
                         
      <div class="row">
         <div class="form-group col-md-10">
                                   <!-- Apelido -->
            <div class="col-md-3">
               <label for="apelido"> Apelido:</label>
               <input type="text" class="form-control" name="apelido"value="{{$treinador->apelido}}"></div> 
                  
                                     <!-- Nome -->
            <div class="col-md-6">
               <label for="nome"> Nome :</label> 
               <input type="text" class="form-control" name="nome"value="{{$treinador->nome}}"><br></div>

                                     <!-- Clube -->
            <div class="col-md-4">
               <label for="clube"> Clube :</label> 
               <input type="text" class="form-control" name="clube"value="{{$treinador->clube}}"><br>
            </div>
         </div>    
         <div class="form-group col-md-10">  

          
                                        <!-- Idade  -->
                                 
            <div class="col-md-2">  
               <label for="idade"> Idade:</label> 
         <input type="number" class="form-control" name="idade"value="{{$treinador->idade}}"></input>
           </div> 
                
                               <!-- Sexo --> 
    

               <label for="sexo">Sexo :
                <input type="radio" class="form-check-input" name="sexo" value="M" checked></input> 
            M
                 <input class="form-check-input" type="radio" name="sexo" id="F" value="F"></input> 
            F
               </label>
            </div>
     
           <div class="form-group col-md-8">
                                         <!-- telefone -->
            <div class="col-md-4">
               <label for="telefone"> Telefone :</label> 
               <input type="text" class="form-control" name="telefone"value="{{$treinador->telefone}}"> </div>  
                                           
                                           <!-- email -->   
           <div class="col-md-6">  
             <label for="email"> email :</label> 
             <input type="text" class="form-control" name="email"value="{{$treinador->email}}">
           </div>
          </div>      
                                    <!-- Outros detalhes --> 
      
          <div class="form-group col-md-8">
               <div class="col-md-6">
            <label for="descricao">Outros detalhes :
                
               <br><br>    <textarea name="descricao" rows="8" cols="90">{{$treinador->descricao}}</textarea> </label>
         
    <div class="form-group row"><br>
      <div class="col-md-2"></div> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
    </div>
  </form>
</div>
@endsection