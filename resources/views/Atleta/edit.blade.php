@extends('admin')
@section('content')
<title>Actualizando atleta </title>    
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <h2>Editar atleta</h2> 
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
    <!-- <p>{{ \Session::get('success') }}</p> -->
    <p>{{URL::to('atleta')}}</p>       
  </div><br>
  @endif 
  
  <form method="post" action="{{action('AtletaController@update', $id)}}">
    {{csrf_field()}} 
    <input name="_method" type="hidden" value="PATCH"> 

    <div class="row">
      <div class="form-group col-md-6">  

        <!-- Apelido -->
        <div class="col-md-6">
          <label for="apelido"> Apelido:</label>
          <input type="text" class="form-control" name="apelido" placeholder="Ex: Tembe" value="{{$atleta->apelido}}"></input></div>
          
          <!-- Nome -->
          <div class="col-md-12">
            <label for="nome"> Nome :</label>
            <input type="text" class="form-control" name="nome" placeholder="Ex: Marcia" value="{{$atleta->nome}}"></input></div>
            
          </div>
          <div class="form-group col-md-10">    
           <!-- Fotografia   -->
       {{--     <div class="col-md-3"> 
             <label for="fotografia">Fotografia 
               <input type="file" class="form-control-file" id="fotografia">
             </label> 
           </div> --}}
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
             <input type="number" class="form-control" name="idade" value="{{$atleta->idade}}"></input> 
           </label>
         </div>  
       </div>
       <div class="form-group col-md-10">    
         <!-- telefone --> 
         <div class="col-md-3">                
           <label for="telefone"> telefone:</label>
           <input type="int" class="form-control" name="telefone" placeholder="Ex: 821002005 " value="{{$atleta->telefone}}"></input></div>  
           
           <div class="col-md-6">         
             <!-- email --> 
             <label for="email"> email: </label> 
             <input type="text" class="form-control" name="email" placeholder="Ex: marciatembe@gmail.com " value="{{$atleta->email}}"></input>
           </div> 
           
         </div> 
         
         <!-- Clube -->
         
         <div class="col-md-12"> 
           <div class="form-group col-md-10"> <br>
             <label for="clube">Clube:
               <tr>   
                <select name="clube" id="clube">  
                  <option value="Cidade da Matola">Cidade da Matola</option>
                  <option value="EDM">EDM</option>
                  <option value="Maria Clara">Maria Clara</option>
                  <option value="Naval">Naval</option>
                  <option value="Nyamunda">Nyamunda</option>
                  <option value="7 de Setembro">7 de Setembro</option>
                </select> 
              </tr>  
            </label>   
            <label> <a href="{{URL::to('clube')}}" title=""><h5>+ Outro clube</h5></a> 
            </label>

            <!--Categoria -->

            <label for="categoria">Categoria :
              <tr> 
                <select name="categoria" id="categoria">  
                 <option value="Sénior">Sénior</option>
                 <option value="Junior">Junior</option>
                 <option value="Juvenil">Juvenil</option>
                 <option value="Pré-juvenil">Pré-juvenil</option>
                 <option value="Benjamin">Benjamin</option>
               </select>  
             </tr>          
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
       <div class="form-group col-md-6"> 
        <div class="col-md-6"> 
         <!-- Escalao  --> 
         <label for="escalao">Escalão de peso :

          <select name="escalao" id="escalao"> 
            <option value="+100">+100</option>
            <option value="-100">-100</option>
            <option value="-90">-90</option>
            <option value="-81">-81</option>
            <option value="+78">+78</option>
            <option value="-78">-78</option>
            <option value="-73">-73</option>
            <option value="-70">-70</option>
            <option value="-66">-66</option>
            <option value="-63">-63</option>
            <option value="-60">-60</option>
            <option value="-57">-57</option>
            <option value="-52">-52</option>
            <option value="-48">-48</option>
          </select>  
        </label>  
      </div>
      <!-- Peso --> 
      <div class="col-md-3">        
        <label for="peso">Peso (Kg): 
          <input type="int" class="form-control" name="peso"value="{{$atleta->peso}}"></input>
        </label>   
      </div>       

      <!-- Outros detalhes --> 

      <div class="col-md-8">  
        <label for="descricao">Outros detalhes :

          <br><br>    <textarea name="descricao" placeholder=" Ex: Iniciou a carreira aos seus 6anos de vida " rows="8" cols="90">{{$atleta->descricao}}</textarea> </label>  
          <div class="form-group row"><br>
            <div class="col-md-2"></div> 
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
          </div>
        </form>
      </div>
      @endsection