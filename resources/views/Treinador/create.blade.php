@extends('admin')
@section('content')
       <title>Adicionar treinador</title> 
<div class="container">
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Registrar treinador</h2><br>
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
                        <p>{{ \Session::get('success') }}</p>
                   </div><br>
               @endif

  <form method="post" action="{{url('treinador')}}">
    <div class="form-group row">
       {{csrf_field()}}   

        <div class="row">
          <div class="form-group col-md-6">  
            
                            <!-- Apelido -->
            <div class="col-md-6">
                <label for="apelido"> Apelido:</label>
                <input type="text" class="form-control" name="apelido" placeholder="Ex: Conde"></input> </div>
             
                             <!-- Nome -->
            <div class="col-md-12">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" name="nome" placeholder="Ex: Chiquinho"></input><br></div>
  
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
                 <input type="number" class="form-control" name="idade"></input> 
               </label>
            </div>  
          </div>
          <div class="form-group col-md-10">    
                                     <!-- telefone --> 
            <div class="col-md-3">                
               <label for="telefone"> telefone:</label>
               <input type="int" class="form-control" name="telefone" placeholder=" Ex: 84 123 91 08"></input></div>  
                      
                                         <!-- email -->
            <div class="col-md-6">     
               <label for="email"> email: </label> 
               <input type="text" class="form-control" name="email" placeholder="Ex: chiquinhoconde@mocambola.co.mz "></input><br>
            </div>  
                                           <!-- Clube --> 
                
           <div class="col-md-6">     
             <label for="clube"> Clube:  
                <select id="clube" name="clube">
                  
                          @foreach($clube as $clb)
                          <option value="{{$clb->nome}}">{{$clb->nome}} </option>
                        @endforeach
                </select>
              </label> 
              <label> <a href="{{URL::to('clube')}}" title=""><h5>+ Outro clube</h5></a>  </label>      
           </div> 
         </div> 

                                     <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
              <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="nota" placeholder=" Ex: Antigo jogador do Sporting de Portgugal " rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar treinador</button>  
    <!-- -->
  </div>
</form>
 
@endsection 