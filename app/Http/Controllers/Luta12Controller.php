<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Luta12;  

use App\Arbitro;  
use App\Atleta;    
use App\Escalao;   
use App\Grupo;     
use App\Inscrito;   
use App\Luta;  
use App\Torneio; 

class Luta12Controller extends Controller
{

  public function index()
  {
   $luta12 = Luta12::all()->toArray();        
   return view('luta12.index', compact('luta12'));
 } 

 public function create()
 {     
   $luta12 = Luta12::all();

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $luta = Luta::all();
   $torneio = Torneio::all();

   return view("luta12.create",['atleta'=>$atleta,'arbitro'=>$arbitro,'escalao'=>$escalao,'inscrito'=>$inscrito,'grupo'=>$grupo,'luta'=>$luta,'luta12'=>$luta12, 'torneio'=>$torneio]);
 } 

 public function edit($id)
 {
   $luta12 = Luta12::find($id);
   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $torneio = Torneio::all();
   
   return view('luta12.edit', compact('luta12','id','arbitro','atleta','escalao','grupo','inscrito','torneio')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [    
      'torneio' => 'required', 
      'atleta1' => 'required', 
      'atleta2' => 'required',  
      'vencedor' => 'required',
      'vencido' => 'required' 
    ]); 
   Luta12::find($id)->update($request->all());
   return redirect()->route('luta12.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40', 
    'torneio' => 'required', 
    'atleta1' => 'required', 
    'atleta2' => 'required',  
    'vencedor' => 'required',
    'vencido' => 'required' 
  ]);
   $luta12 = new Luta12([  
    'torneio' => $request->get('torneio'),
    'atleta1' => $request->get('atleta1'),
    'atleta2' => $request->get('atleta2'), 
    'vencedor' => $request->get('vencedor'),
    'vencido' => $request->get('vencido'), 
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Luta12::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 

 }

 public function destroy($id)
 {
   $luta12 = Luta12::find($id);
   $luta12->delete();

   return redirect('/luta12');
 }  
}
