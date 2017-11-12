@extends('admin')
@section('content')
<title>Adicionar categoria</title>
<div class="container"> 
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <h2>Registrar categoria</h2><br>
   <a href="{{URL::to('categoria')}}" title=""><h4><- voltar</h4></a>
             
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

  <form method="post" action="{{url('categoria')}}">
          {{csrf_field()}}
                              
 
        <div class="row">
          <div class="form-group col-md-8">  
             
                             <!-- Nome -->
            <div class="col-md-8">
                <label for="nometorneio"> Nome :</label>
        <input type="text" class="form-control" name="nometorneio" placeholder="Ex: Juvenis "></input> 
            </div>
        </div>  
      </div>

                                     <!-- Outros detalhes --> 
<!-- 
         <div class="form-group col-md-12">
             <br> <label for="descricao" class="col-sm-2 col-form-label col-form-label-sm">Outros detalhes
               
          <br> <br><textarea name="nota" rows="8" cols="80"></textarea> 
              </label>
        </div> -->

   <div class="form-group col-md-4"> 
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar categoria</button>  
    <!-- -->
  </div>
</form>
 
@endsection 