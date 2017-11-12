@extends('admin')
@section('content')
<title>Actualizando grupos </title>
<div class="container"> 
  <h2>Registrar grupo</h2><br> 
  <a href="{{URL::to('grupo')}}" title=""><h4><- voltar</h4></a>

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

<form method="post" action="{{action('GrupoController@update', $id)}}"> 
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PATCH">   

  <div class="row">
    <div class="form-group col-md-8">   


      <!-- juri : --> 

      <div class="col-md-10"> <br>                                            
        <label for="juri">Júri : 
          <input type="text" class="form-control" name="juri"value="{{$grupo->juri}}"></input>
        </label> 
      </div>        

{{-- 
            <div class="col-md-10"> <br> 
                  <label for="nome"> Nome do Torneio :
                          <select id="nome" name="nome">
                  
                          @foreach($torneio as $tor)
                          <option value="{{$tor->nome}}">{{$tor->nome}} </option>
                          @endforeach
                          </select>
                  </label>    
                </div>  --}}


                <!-- Escalao  --> 

                <div class="col-md-6"> <br>  
                  <!-- Escalao  --> 
                  <label for="nome">Escalão de peso :

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

{{-- 

            <div class="col-md-10"> <br> 
                  <label for="escalao">Escalão de peso :
                          <select id="escalao" name="escalao">
                  
                          @foreach($escalao as $esc)
                          <option value="{{$esc->nome}}">{{$esc->nome}} </option>
                          @endforeach
                          </select>
                  </label>    
                </div>  --}}


                <div class="row"> 

                 <div class="form-group col-md-8">    
                  <h3>Selecione os atletas</h3>  

                  <!-- Atleta 1 -->
                  <div class="col-md-8">
                    <label for="nome"> Atleta 1 :</label> 
                    <input type="text" class="form-control" name="nome"value="{{$grupo->atleta1}}"> 
                  </input><br> 
                </div> 
                <!-- Atleta 2 -->
                <div class="col-md-8">
                  <label for="nome"> Atleta 2 :</label> 
                  <input type="text" class="form-control" name="nome"value="{{$grupo->atleta2}}"> 
                </input><br> 
              </div> 
              <!-- Atleta 3 -->
              <div class="col-md-8">
                <label for="nome"> Atleta 3  :</label> 
                <input type="text" class="form-control" name="nome"value="{{$grupo->atleta3}}"> 
              </input><br> 
            </div> 
            <!-- Atleta 4 -->
            <div class="col-md-8">
              <label for="nome"> Atleta 4 :</label> 
              <input type="text" class="form-control" name="nome"value="{{$grupo->atleta4}}"> 
            </input><br> 
          </div> 
        </div> 



        <!-- Outros detalhes --> 

        <div class="form-group col-md-12">
         <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes

          <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
        </label>
      </div>

      <div class="form-group col-md-4"> 
        <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar grupo</button>  
      </div>
    </form>

    @endsection 