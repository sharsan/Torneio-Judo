@extends('admin')
@section('content')
    <title>Actualizando arbitro </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Arbitro</h2> 
  <a href="{{URL::to('arbitro')}}" title=""><h4><- voltar</h4></a>
 
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
                        <p>{{URL::to('arbitro')}}</p>
                   </div><br>
               @endif
          
  <form method="post" action="{{action('ArbitroController@update', $id)}}">

    {{csrf_field()}}  
     <input name="_method" type="hidden" value="PATCH">                   
         <div class="form-group col-md-6">  
            
                            <!-- Apelido -->
           <div class="col-md-6">
                <label for="apelido"> Apelido:</label>
                <input type="text" class="form-control" name="apelido"value="{{$arbitro->apelido}}"></input> 
           </div>
             
                             <!-- Nome -->
           <div class="col-md-12">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" name="nome"value="{{$arbitro->nome}}"></input><br>
           </div>
  
         </div>
         <div class="form-group col-md-10">                             

                                     <!-- Fotografia   -->
           <div class="col-md-3"> 
               <label for="fotografia">Fotografia 
                 <input type="file" class="form-control-file" id="fotografia">
               </label> 
           </div>
                               <!-- Sexo --> 
           <div class="col-md-3">  <br> 
                <label for="sexo">Sexo :
                <input type="radio" class="form-check-input" name="sexo" value="M" checked></input> 
              M
                <input class="form-check-input" type="radio" name="sexo" id="F" value="F"></input> 
              F
                </label> 
            </div> 
                                     <!-- Idade  -->
                                  
            <div class="col-md-2"> 
               <label for="idade"> Idade:
                 <input type="number" class="form-control" name="idade"value="{{$arbitro->idade}}"></input> 
               </label>
            </div>  
          </div>
          <div class="form-group col-md-10">    
                                     <!-- telefone --> 
            <div class="col-md-3">                
               <label for="telefone"> telefone:</label>
               <input type="int" class="form-control" name="telefone"value="{{$arbitro->telefone}}">
               </input>
            </div>  
                 
            <div class="col-md-6">         
                                     <!-- email --> 
               <label for="email"> email: </label> 
               <input type="text" class="form-control" name="email"value="{{$arbitro->email}}"></input>
            </div> 
              
          </div>    
 
                                    <!-- Outros detalhes -->  
      
         <div class="form-group col-md-10">
              <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm"> Outros detalhes
                <br>
                   <textarea name="descricao" rows="8" cols="70"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px"> Actualizar</button>  
    <!-- -->
  </div>
</form>
 
@endsection