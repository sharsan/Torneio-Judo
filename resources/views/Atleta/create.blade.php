@extends('admin')
@section('content')
<title>Adicionar atleta </title>
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

  {{csrf_field()}} 

  <div class="row">
    <div class="form-group col-md-6">  

      <!-- Apelido -->
      <div class="col-md-6">
        <label for="apelido"> Apelido:</label>
        <input type="text" class="form-control" name="apelido" placeholder="Ex: Tembe"></input> </div>

        <!-- Nome -->
        <div class="col-md-12">
          <label for="nome"> Nome :</label>
          <input type="text" class="form-control" name="nome" placeholder="Ex: Marcia"></input><br></div>

        </div>
        <div class="form-group col-md-10">    
         <!-- Fotografia   -->
<!--             <div class="col-md-3"> 
               <label for="fotografia">Fotografia 
                 <input type="file" class="form-control-file" id="fotografia">
               </label> 
             </div> -->
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
             <input type="int" class="form-control" name="telefone" placeholder="Ex: 821002005 "></input></div>  

             <div class="col-md-6">         
              <!-- email --> 
              <label for="email"> email: </label> 
              <input type="text" class="form-control" name="email" placeholder="Ex: marciatembe@gmail.com "></input>
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
            <label> <a href="{{URL::to('clube')}}" title=""><h5>+ Outro clube</h5></a> 
            </label>  
          </div>           
          <!--Categoria -->
          <div class="col-md-8"> <br> 
           <label for="categoria"> Categoria : 
            <select id="categoria" name="categoria">

              @foreach($categoria as $cat)
              <option value="{{$cat->nome}}">{{$cat->nome}} </option>
              @endforeach
            </select>    
          </label> 
          <label> <a href="{{URL::to('categoria')}}" title=""><h5>+ Outra categoria</h5></a> 
          </label>     
        </label>     

        <!-- Cinturao -->  
        
        <label for="cinturao">Cinturao: 
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
   </div>
   <div class="form-group col-md-8"> 
    <div class="col-md-6"> <br>
     <!-- Escalao  --> 
     <label for="escalao">Escalão de peso : 
      <select id="escalao" name="escalao">

        @foreach($escalao as $esc)
        <option value="{{$esc->nome}}">{{$esc->nome}} </option>
        @endforeach   
      </select> 
    </label>  

    <label> <a href="{{URL::to('escalao')}}" title=""><h5>+ Outro escalão</h5></a> 
    </label> 

  </div>
  <!-- Peso --> 
  <div class="col-md-3">        
    <label for="peso">Peso (Kg): 
     <input type="int" class="form-control" name="peso" placeholder=" Ex: 46 "></input>
   </label>   
 </div>       

</div>      
<!-- Outros detalhes --> 

<div class="form-group col-md-12">
  <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes

    <br> <br><textarea name="descricao" placeholder=" Ex: Iniciou a carreira aos seus 6anos de vida " rows="8" cols="80"></textarea> 
  </label>
</div>

<div class="form-group col-md-4"> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar atleta</button>  
  <!-- -->
</div>
</form>

@endsection