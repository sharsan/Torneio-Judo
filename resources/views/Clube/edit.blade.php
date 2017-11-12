@extends('admin')
@section('content')
<title>Actualizando clube</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
  <body>
<div class="container">
  <h2>Editar clube</h2><br>
       <a href="{{URL::to('clube')}}" title=""><h4><- voltar</h4></a>

 
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
                        <p>{{URL::to('clube')}}</p>
                   </div><br>
               @endif
  <form method="post" action="{{action('ClubeController@update', $id)}}"> 
          {{csrf_field()}}
   <input name="_method" type="hidden" value="PATCH">  

                               <!-- Nome --> 

          <div class="col-md-4">
             <label for="nome"> Nome :</label>
               <input type="text" class="form-control" name="nome"placeholder="Ex: Costa do Sol"value="{{$clube->nome}}">
               </input>
         
           </div> 
                                    <!-- Outros detalhes --> 
      <!-- 
       <div class="col-md-12"> 
          <br>  <label for="descricao">Outros detalhes :
                
               <br><br>  <textarea name="descricao" rows="8" cols="90">{{$clube->descricao}}</textarea> 
            </label> -->
            
     
        <div class="col-md-12"> <br> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button> 
        </div>
  </form>
</div>
@endsection