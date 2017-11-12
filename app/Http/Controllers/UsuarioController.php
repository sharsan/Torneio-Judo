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
             //return view("usuario/resultados",compact('atleta')); 
 } 
         // public function index()
         //     {
         //     $vencedor =Vencedor::all()->toArray();  
         //     return view("usuario.resultados",compact('vencedor'));
         //     } 

 public function eventos()
 {
     $torneio = Torneio::all(); 

     return view("usuario.eventos",compact('torneio'));
 } 

 public function resultados()
 {
     $vencedor =Vencedor::all(); 

     return view("usuario.resultados",compact('vencedor'));
 } 
         // public function index()
         //     {
         //     $treinador =Usuario::all(); 

         //     return view("treinador.index",compact('treinador'));
         //     }
}
