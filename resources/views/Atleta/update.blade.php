@extends('admin')
@section('content')
 <title>Registrar atleta </title>
<div class="container">
      <h2>Registrar atleta</h2><br> 
        <a href="{{URL::to('atleta')}}" title=""><h4><- voltar</h4></a>   

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
          
  <form method="post" action="{{url('atleta')}}">
    <div class="form-group row">
        {{csrf_field()}} 

                          
       <div class="row">
           <div class="form-group col-md-6">  
            
                            <!-- Apelido -->
             <div class="col-md-6">
                <label for="apelido"> Apelido:
                  <input type="text" class="form-control" name="apelido"></input>
                </label>
             </div>
                             <!-- Nome -->
             <div class="col-md-16">
                <label for="name"> Nome :
                    <input type="text" class="form-control" name="nome"></input> 
                </label>
             </div>
           </div>
                              <!-- Clube -->
          
          <div class="col-md-12"> 
             <div class="form-group col-md-10"> <br> 
             <label for="clube"> Clube:  
                <select id="clube" name="clube">
                  
                          @foreach($clube as $clb)
                          <option value="{{$clb->nome}}">{{$clb->nome}} </option>
                        @endforeach
                </select> 
              </label> 
              <label> <a href="{{URL::to('clube')}}" title=""><h5>+ Outro clube</h5></a>  </label>  
             </div>           
                       
                                 <!--Categoria -->
        
                 <label for="categoria"> Categoria : 
                          <select id="categoria" name="categoria">
                  
                          @foreach($categoria as $cat)
                          <option value="{{$cat->nome}}">{{$cat->nome}} </option>
                          @endforeach
                          </select>      
                           
                  </label>     
              
                           <!-- Cinturao -->  
         
                 <label for="cinturao"> Cinturao: 
                 <tr>  
                   <select name="cinturao" id="cinturao">  
                       <option value="Amarelo">Amarelo</option>
                       <option value="Laranja">Laranja</option>
                       <option value="Verde">Verde</option>
                       <option value="Azul">Azul</option>
                       <option value="Castanho">Castanho</option>
                       <option value="Preto">Preto</option> 
                       <option value="Branco">Branco</option>
                    </select> 
                  </tr>
                 </label>  
               </div>
        
               <div class="form-group col-md-12"> 
                
                             <!-- Escalao  --> 
                 <label for="escalao">Escalão de peso : 
                      <select id="categoria" name="categoria">
                  
                          @foreach($escalao as $esc)
                          <option value="{{$esc->nome}}">{{$esc->nome}} </option>
                          @endforeach   
                      </select> 
                </label>  
            
             <label> <a href="{{URL::to('escalao')}}" title=""><h5>+ Outro escalão</h5></a> 
           </label> 
                    
                              <!-- Peso --> 
                              
                    <label for="peso">Peso (Kg): 
                       <input type="int" class="form-control" name="peso"></input>
                    </label>   
                      
                               <!-- Sexo --> 
                <label for="sexo">Sexo :
                <input type="radio" class="form-check-input" name="sexo" value="M" checked></input> 
           M
                <input class="form-check-input" type="radio" name="sexo" id="F" value="F"></input> 
           F
                </label> 
                  </div>
                </div>   
 
                            <!-- Idade  -->
                                 
        <div class="col-md-12"> 
            <div class="form-group col-md-1">
               <label for="idade">Idade:
                   
                   <input type="number" class="form-control" name="idade"></input> 
                 
               </label>  
             </div>
          
             <div class="form-group col-md-6">
                                     <!-- email --> 
             <div class="col-md-6">
                <label for="email">email:
                     <input type="text" class="form-control" name="email"></input>
                </label>    
             </div>
                                     <!-- telefone --> 
             <div class="col-md-16">                         
                <label for="telefone">telefone:
                   <input type="int" class="form-control" name="telefone"></input>
                </label>  
              </div>
         </div>      
                                    <!-- Outros detalhes --> 

         <div class="form-group col-md-12">
              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
                <br>
                   <textarea name="nota" rows="8" cols="80"></textarea> 
              </label>
        </div>

   <div class="form-group col-md-4"><br>
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar atleta</button>  
    <!-- -->
  </div>
</form>
 
@endsection