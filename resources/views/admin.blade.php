<!doctype html>
<html lang="{{ config('app.locale') }}">  

<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> 
<body>
  <br><br> 
  <div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
      &nbsp;
    </ul>      
    <ul class="nav navbar-nav navbar-right">
     <!-- <ul class="nav navbar-nav navbar-right"> -->

       <li>
         <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         Sair
       </a> 
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>    </div>

  <h1><p class="text-center">Federação Moçambicana de Judo</p>  

    <div class="container">
      <a href="{{URL::to('inicio')}}" title=""><h4>Inicio</h4></a>
    </h4>  
  </div>


  @yield('content') 

  <script type="text/javascript">

    function filtrar () {

      var nomeFiltro = document.getElementById('filtro-nome');
      var tabela = document.getElementsByTagName('tr');

      for (var linha=1; linha<tabela.length; linha++ ){
        var colunas = tabela[linha].cells[0].innerText;


        if(colunas === nomeFiltro.value){
          tabela[linha].style.display = 'table-row';
        }else
        tabela[linha].style.display = 'none';
      }
    }


    function mostrarLinhas(){
      var nomeFiltro = document.getElementById('filtro-nome');
      var tabela = document.getElementsByTagName('tr');

      if(nomeFiltro.value === ""){
        for(var linha=1; linha<tabela.length; linha++){
          tabela[linha].style.display = 'table-row';
        }
      }
    }


  </script>

</body>
</html>

