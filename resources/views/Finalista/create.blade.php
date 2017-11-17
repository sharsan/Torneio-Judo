@extends('admin')
@section('content')
<title>Luta final </title>
<div class="container"> 
  <center> <h2>Registrar finais de cada escalão</h2></center><br> 
  <a href="{{URL::to('finalista')}}" title=""><h4><- voltar</h4></a>

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

<form method="post"  action="{{url('finalista')}}">

  {{-- Grupo A --}} 
  <center><h3>Grupo A</h3></center><br> 

  <table class="table table-striped">   

   <thead>
    <tr>
      <th>ID</th> 
      <th>Torneio</th> 
      <th>Escalão</th> 
      <th>1º do grupo A</th> 
      <th>Júri</th> 
    </tr>
  </thead>

  @foreach($luta12 as $post)
  <tr>
    <td>{{$post['id']}}</td> 
    <td>{{$post['torneio']}}</td>
    <td>{{$post['escalao']}}</td>
    <td>{{$post['vencedor12']}}</td> 
    <td>{{$post['juri']}}</td>   
    @endforeach
  </table>   

  {{-- Grupo B --}}
  
  <center><h3>Grupo B</h3></center><br>

  <table class="table table-striped">   

    <thead>
      <tr>
        <th>ID</th> 
        <th>Torneio</th> 
        <th>Escalão</th> 
        <th>1º do grupo B</th> 
        <th>Júri</th> 
      </tr>
    </thead>

    @foreach($luta34 as $post)
    <tr>
      <td>{{$post['id']}}</td> 
      <td>{{$post['torneio']}}</td>
      <td>{{$post['escalao']}}</td>
      <td>{{$post['vencedor34']}}</td> 
      <td>{{$post['juri']}}</td>   
      @endforeach
    </table>


    {{csrf_field()}}   
    <!-- <div class="row">   -->
     <div class="row">
      <div class="form-group col-md-8">   
       <!-- Nome do campeonato  -->  

       <div class="col-md-10"> <br> 
        <label for="torneio"> Nome do Torneio :
          <select id="torneio" name="torneio">

            @foreach($torneio as $tor)
            <option value="{{$tor->nome}}">{{$tor->nome}} </option>
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

      <!-- juri : -->
      <div class="col-md-10"> <br> 
        <label for="juri"> Júri :
          <select id="juri" name="juri">

            @foreach($arbitro as $arb)
            <option value="{{$arb->nome}}">{{$arb->nome}} </option>
            @endforeach
          </select>
        </label>    
      </div> 

      {{-- Selecione os finalistas --}}


      <div class="row"> 

        <div class="form-group col-md-12"> 
          <h3>Selecione os finalistas do escalão</h3> 
          <!-- 1º lugar -->

          <div class="col-md-10"> <br> 
            <label for="vencedor12">1º do grupo A:
              <select id="vencedor12" name="vencedor12">

                @foreach($luta12 as $luta)
                <option value="{{$luta->vencedor12}}">{{$luta->vencedor12}} </option>
                @endforeach
              </select>
            </label>      <b>  VS  </b>
            <!-- 2º lugar --> 
            <label for="vencedor34">1º do grupo B:
             <select id="vencedor34" name="vencedor34">

              @foreach($luta34 as $luta)
              <option value="{{$luta->vencedor34}}">{{$luta->vencedor34}} </option>
              @endforeach
            </select> 
          </label>
        </div>  
        <!-- Vencedor -->
        <div class="col-md-6"> <br>
          <label for="primeiro"> Vencedor:
           <select id="primeiro" name="primeiro">

            @foreach($atleta as $atl)
            <option value="{{$atl->nome}}">{{$atl->nome}} </option>
            @endforeach
          </select> 
        </label>
      </div> 
      <!-- Vencido -->
      <div class="col-md-10"> <br>
        <label for="segundo"> Vencido:
         <select id="segundo" name="segundo">

          @foreach($atleta as $atl2)
          <option value="{{$atl2->nome}}">{{$atl2->nome}} </option>
          @endforeach
        </select> 
      </label>
    </div>  
  </div> 



  <!-- Outros detalhes --> 

  <div class="form-group col-md-12">
   <br> <label for="descricao" class="col-sm-4 col-form-label col-form-label-sm">Outros detalhes

    <br> <br><textarea name="descricao" rows="8" cols="80"></textarea> 
  </label>
</div>

<div class="form-group col-md-4"> 
  <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar finalistas</button>  
</div>
</form>

@endsection 