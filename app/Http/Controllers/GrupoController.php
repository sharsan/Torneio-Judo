<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grupo;  
use App\Atleta;   
use App\Arbitro;  
use App\Escalao; 
use App\Inscrito; 
use App\Torneio;  

class GrupoController extends Controller
{
 public function index()
 {
   $grupo =Grupo::all()->toArray();  
   return view("grupo.index",compact('grupo'));
 } 

 public function create()
 {              
   $atleta =Atleta::all(); 
   $arbitro =Arbitro::all(); 
   $escalao =Escalao::all(); 
   $inscrito =Inscrito::all(); 
   $torneio =Torneio::all(); 
   return view("grupo.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'inscrito'=>$inscrito,'torneio'=>$torneio]);
 }  


 public function edit($id)
 {
   $grupo = Grupo::find($id);

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao =Escalao::all(); 
   $inscrito =Inscrito::all();
   $torneio =Torneio::all(); 
   
   return view('grupo.edit', compact('grupo','id','arbitro','atleta','escalao','inscrito','torneio')); 
 } 
 
 public function store(Request $request)
 {   

   $this->validate(request(), [
                 // 'nome' => 'required|unique:grupo|max:40',  
     'torneio' => 'required|max:40',  
     'escalao' => 'required|max:40',  
     'atleta1' => 'required|max:40',  
     'atleta2' => 'required|max:40'   
   ]);
   $grupo = new Grupo([
     'juri' => $request->get('juri'), 
     'torneio' => $request->get('torneio'),
     'escalao' => $request->get('escalao'),
     'atleta1' => $request->get('atleta1'),
     'atleta2' => $request->get('atleta2'),
     'atleta3' => $request->get('atleta3'),
     'atleta4' => $request->get('atleta4'),
     'descricao' => $request->get('descricao') 
   ]);

   $existe=Grupo::where("torneio",$request->get('torneio'))->where("escalao",$request->get('escalao'))->exists();

   if($existe==false){
     Grupo::create($request->all()); 
     return back()->with('success', 'Grupo adicionado com sucesso');
   }else{
    return back()->with('success', 'Ja existe este registo');
  }
} 
public function update(Request $request, $id)

{   request()->validate(
 [ 

   'torneio' => 'required|max:40',  
   'escalao' => 'required|max:40',  
   'atleta1' => 'required|max:40',  
   'atleta2' => 'required|max:40'   
 ]);
Grupo::find($id)->update($request->all());

return redirect()->route('grupo.index')

->with('success','Grupo Actualizado com sucesso'); 
} 

public function destroy($id)
{
 $grupo = Grupo::find($id);
 $grupo->delete();

 return redirect('grupo');
}   
}
