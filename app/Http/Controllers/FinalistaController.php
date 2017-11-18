<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finalista; 

use App\Arbitro;  
use App\Atleta;   
use App\Escalao;  
use App\Grupo;  
use App\Inscrito;  
use App\Tatami12;  
use App\Tatami34;  
use App\Torneio;  

class FinalistaController extends Controller
{
 public function index()
 {
   $finalista =Finalista::all()->toArray();  
   
   $tatami12 = Tatami12::all();
   $tatami34 = Tatami34::all();
   return view("finalista.index",compact('finalista','tatami12','tatami34'));
 }  

 public function create()
 {              
   $finalista = Finalista::all();

   $atleta =Atleta::all(); 
   $arbitro =Arbitro::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $tatami12 = Tatami12::all();
   $tatami34 = Tatami34::all();
   $torneio= Torneio::all();


   return view("finalista.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'grupo'=>$grupo,'inscrito'=>$inscrito,'tatami12'=>$tatami12,'tatami34'=>$tatami34,'torneio'=>$torneio]);
 }  

 public function edit($id)
 {
   $finalista = Finalista::all();
   
   $atleta =Atleta::all(); 
   $arbitro =Arbitro::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $tatami12 = Tatami12::all();
   $tatami34 = Tatami34::all();
   $torneio= Torneio::all();

   return view('finalista.edit',compact('finalista','id','arbitro','atleta','escalao','grupo','inscrito','tatami12','tatami34','torneio'));
 }  

 public function store(Request $request)
 {   

   $this->validate(request(), [
                 // 'nome' => 'required|unique:finalistas|max:40',  
     'primeiro' => 'required|max:40',  
     'segundo' => 'required|max:40'  
   ]);
   $finalista = new Finalista([
     'torneio' => $request->get('torneio'), 
     'escalao' => $request->get('escalao'), 
     'vencedor12' => $request->get('vencedor12'), 
     'vencedor34' => $request->get('vencedor34'), 
     'primeiro' => $request->get('primeiro'), 
     'segundo' => $request->get('segundo'),  
     'descricao' => $request->get('descricao') 
   ]);

   $existe=Finalista::where("escalao",$request->get('nome'))->where("escalao",$request->get('escalao'))->exists();

   if($existe==false){
     Finalista::create($request->all()); 
     return back()->with('success', 'Finalista adicionado com sucesso');
   }else{
    return back()->with('success', 'Ja existe este registo');
  }
} 
public function update(Request $request, $id)

{   request()->validate(
 [ 

  'atleta' => 'required' 
]);
Finalista::find($id)->update($request->all());

return redirect()->route('finalista.index')

->with('success','Actualizado com sucesso'); 
} 

public function destroy($id)
{
 $finalista = Finalista::find($id);
 $finalista->delete();

 return redirect('finalista');
}   
}
