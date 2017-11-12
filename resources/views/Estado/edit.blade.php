@extends('admin')
@section('content')
<title>Actualizando estado</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
   <body>
<div class="container"> 
  
      <h2>Editar estado</h2><br> 
   
   <a href="{{URL::to('estado')}}" title=""><h4><- voltar</h4></a>
              
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
 <form method="post" action="{{action('EstadoController@update', $id)}}">  
          {{csrf_field()}}
   <input name="_method" type="hidden" value="PATCH">  
                               <!-- Nome -->
        <div class="row">     
            <div class="form-group col-md-4">
                <label for="nome">Novo estado :</label>
                   <input type="text" class="form-control" name="nome"placeholder="Ex: Por marcar data"value="{{$estado->nome}}">  
                   </input>
                
               
                <br> <br>
       
            <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>   
            </div>
       </div>
    </div>
  </form> 
</div>
@endsection  