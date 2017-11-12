@extends('admin')
@section('content')
<title>Grupos </title>
<div class="container"> 
  <h2>Registrar grupo</h2><br>
  
  <div class="container">
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

  <form method="post"  action="{{url('grupo')}}">
    <div class="form-group row">
     {{csrf_field()}}     
     
     <div class="row">
      <div class="form-group col-md-6">  
        
       <div class="col-md-12"> <br>  
         <!-- Nome do campeonato  --> 
         <div class="col-md-6">
          <label for="nome">Nome do campeonato :
            <input type="text" class="form-control" name="nome"></input>
          </label> 
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
          
          <!-- Outros detalhes --> 
          <div class="form-group col-md-12">
            <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm"> Outros detalhes
              <br>
              <textarea name="descricao" rows="8" cols="80"></textarea> 
            </label>
          </div>


          <div class="form-group col-md-4"><br>
            <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar grupo</button>   
          </div>
        </form>
        
        @endsection  