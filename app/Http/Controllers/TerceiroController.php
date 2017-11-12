<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terceiro; 

use App\Arbitro;  
use App\Atleta;   
use App\Escalao;  
use App\Grupo;  
use App\Inscrito;  
use App\Luta12;  
use App\Luta34;  
use App\Torneio; 

class TerceiroController extends Controller
{
   public function index()
   {
     $terceiro =Terceiro::all()->toArray();  
     return view("terceiro.index",compact('terceiro'));
 }  

 public function create()
 {              
     $terceiro = Terceiro::all();

     $atleta =Atleta::all(); 
     $arbitro =Arbitro::all(); 
     $escalao = Escalao::all();
     $grupo = Grupo::all();
     $inscrito = Inscrito::all();
     $luta12 = Luta12::all();
     $luta34 = Luta34::all();
     $torneio= Torneio::all();


     return view("terceiro.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'grupo'=>$grupo,'inscrito'=>$inscrito,'luta12'=>$luta12,'luta34'=>$luta34,'torneio'=>$torneio]);
 }  

 public function edit($id)
 {
     $terceiro = Terceiro::find($id);
     return view('terceiro.edit',compact('terceiro','id'));
 }  

 public function store(Request $request)
 {   

     $this->validate(request(), [
                 // 'nome' => 'required|unique:terceiros|max:40',  
       'vencido12' => 'required|max:40',
       'vencido34' => 'required|max:40'
   ]);
     $terceiro = new Terceiro([
       'torneio' => $request->get('torneio'), 
       'escalao' => $request->get('escalao'), 
       'vencido12' => $request->get('vencido12'), 
       'vencido34' => $request->get('vencido34'), 
       'terceiro' => $request->get('terceiro'),  
       'descricao' => $request->get('descricao') 
   ]);

     $existe=Terceiro::where("escalao",$request->get('nome'))->where("escalao",$request->get('escalao'))->exists();

     if($existe==false){
       terceiro::create($request->all()); 
       return back()->with('success', 'Finalista adicionado com sucesso');
   }else{
    return back()->with('success', 'Ja existe este registo');
}
} 
public function update(Request $request, $id)

{   request()->validate(
   [ 
    'vencido12' => 'required|max:40',
    'vencido34' => 'required|max:40'
]);
Terceiro::find($id)->update($request->all());

return redirect()->route('terceiro.index')

->with('success','Vencedor actualizado com sucesso'); 
} 

public function destroy($id)
{
   $terceiro = Terceiro::find($id);
   $terceiro->delete();

   return redirect('terceiro');
}   
}
