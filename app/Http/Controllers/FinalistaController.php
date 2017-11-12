<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finalista;  
use App\Grupo;  

class FinalistaController extends Controller
{
 public function index()
 {
   $finalista =Finalista::all()->toArray();  
   return view("finalista.index",compact('finalista'));
}  

public function create()
{              
   $grupo =Grupo::all();    
   return view("finalista.create",['luta'=>$luta,'atleta'=>$atleta]);
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
     'atleta' => 'required|max:40',  
 ]);
   $finalista = new Finalista([
     'torneio' => $request->get('torneio'), 
     'escalao' => $request->get('escalao'), 
     'vencedor12' => $request->get('vencedor12'), 
     'vencedor34' => $request->get('vencedor34'), 
     'primeiro' => $request->get('primeiro'), 
     'segundo' => $request->get('segundo'), 
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
