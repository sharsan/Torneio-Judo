@extends('admin')
@section('content')
<title>Competicoes </title>
<div class="container"> 
  <h2>Registrar final</h2><br> 
  <a href="{{URL::to('final')}}" title=""><h4><- voltar</h4></a>
  
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

<form method="post"  action="{{url('final')}}">

 {{csrf_field()}}   
 <!-- <div class="row">   -->
   <div class="row">
    <div class="form-group col-md-8">   
     <!-- Nome do campeonato  -->  

     <div class="col-md-8">
      <label for="torneio"> Nome do campeonato :</label>
      <input type="text" class="form-control" name="torneio"value="{{$final->torneio}}"></input> 
      
    </div>  
<!--       </div>

  <div class="form-group col-md-8">  -->
   <div class="col-md-6"> <br>  
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
</div>
<!-- <div class="form-group row"> -->
  <div class="form-group col-md-8"> 
    <div class="col-md-6">                                                <!-- juri : -->
      <label for="juri">Júri : 
        <input type="text" class="form-control" name="juri"value="{{$final->juri}}"></input>
      </label>
    </div>
  </div> 
</div> 
<div class="row"> 
 <div class="form-group col-md-3"> 

  <!-- Nome -->
  <div class="col-md-12">
    <label for="primeiro"> 1º lugar:</label>
    <input type="text" class="form-control" name="primeiro"value="{{$final->primeiro}}"></input><br></div>
    <!-- Nome -->
    <div class="col-md-12">
      <label for="segundo"> 2º lugar:</label>
      <input type="text" class="form-control" name="segundo"value="{{$final->segundo}}"></input><br></div>
      <!-- Nome -->
      <div class="col-md-12">
        <label for="terceiro">  3º lugar :</label>
        <input type="text" class="form-control" name="terceiro"value="{{$final->terceiro}}"></input><br></div>

      </div>
    </div> 

    <!-- Outros detalhes --> 

    <div class="form-group col-md-12">
     <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes

      <br> <br><textarea name="descricao" rows="8" cols="80"value="{{$final->descricao}}"></textarea> 
    </label>
  </div>

  <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar finalistas</button>  
  </div>
</form>

@endsection 