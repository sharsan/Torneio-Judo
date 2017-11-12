@extends('admin')
@section('content')
 <title>Registrar torneio </title>
<div class="container">
      <h2>Registrar torneio</h2><br> 
        <a href="{{URL::to('torneio')}}" title=""><h4><- voltar</h4></a>   

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
          
  <form method="post" action="{{url('torneio')}}">
    <div class="form-group row">
        {{csrf_field()}} 

                          
       <div class="row">
           <div class="form-group col-md-6">   
            
                             <!-- Nome -->
             <div class="col-md-16">
                <label for="name">Nome :
                    <input type="text" class="form-control" name="nome"></input> 
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
    <button type="submit" class="btn btn-success" style="margin-left:38px">Adicionar torneio</button>  
    <!-- -->
  </div>
</form>
 
@endsection