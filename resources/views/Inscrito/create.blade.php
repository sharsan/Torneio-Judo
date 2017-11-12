@extends('admin') 
@section('content')
 <title>Inscrever competidor</title>
<div class="container"> 
       <h2>Inscrever competidor</h2><br> 
       
        <a href="{{URL::to('inscrito')}}" title=""><h4><- voltar</h4></a>   

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
               
  <form method="post" action="{{url('inscrito')}}">

        {{csrf_field()}} 
                          
        <div class="row">
          <div class="form-group col-md-6">   
             
                                     <!-- Nome do Evento -->
            <div class="col-md-12"> 
                <br>
                 <label for="torneio"> Torneio:  
                  <select id="torneio" name="torneio">
                  
                        @foreach($torneio as $trn)
                          <option value="{{$trn->nome}}">{{$trn->nome}} </option>
                        @endforeach
                </select>
              </label>   
            </div>    
                                   <!-- Nome do Competidor -->

            <div class="col-md-10"> <br> 
                 <label for="atleta"> Nome do Competidor: 
                          <select id="atleta" name="atleta">
                  
                          @foreach($atleta as $atl)
                          <option value="{{$atl->nome}}">{{$atl->nome}} </option>
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
          </div>  
                                    <!-- Outros detalhes --> 

         <div class="form-group col-md-12">  
              <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
              </label>
         </div>

         <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Inscrever competidor</button>  
     
         </div>
</form>
 
@endsection