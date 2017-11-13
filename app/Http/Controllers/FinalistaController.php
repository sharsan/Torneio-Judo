<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finalista; 

use App\Arbitro;  
use App\Atleta;   
use App\Escalao;  
use App\Grupo;  
use App\Inscrito;  
use App\Luta12;  
use App\Luta34;  
use App\Torneio;  

class FinalistaController extends Controller
{
 public function index()
 {
   $finalista =Finalista::all()->toArray();  
   return view("finalista.index",compact('finalista'));
 }  

 public function create()
 {              
   $atleta =Atleta::all(); 
   $arbitro =Arbitro::all(); 
   $finalista = Finalista::all();
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $luta12 = Luta12::all();
   $luta34 = Luta34::all();
   $torneio= Torneio::all();


   return view("finalista.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'grupo'=>$grupo,'inscrito'=>$inscrito,'luta12'=>$luta12,'luta34'=>$luta34,'torneio'=>$torneio]);
 }  

 public function edit($id)
 {
   $finalista = Finalista::find($id);
   return view('finalista.edit',compact('finalista','id'));
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
