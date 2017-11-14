<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Atleta; 
use App\Vencedor;
use App\Torneio; 

class UsuarioController extends Controller
{
   public function index()
   {
       $atleta =Atleta::all(); 

       return view("usuario.index",compact('atleta')); 
   }  

   public function eventos()
   {
       $torneio = Torneio::all(); 

       return view("usuario.eventos",compact('torneio'));
   } 

   public function resultados()
   {
       $luta =Luta::all(); 

       return view("usuario.resultados",compact('luta'));
   }  
}
