<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Tatami12;  

use App\Arbitro;  
use App\Atleta;    
use App\Escalao;   
use App\Grupo;     
use App\Inscrito;   
use App\Qualificacoes;  
use App\Torneio; 

class Tatami12Controller extends Controller
{

  public function index()
  {
   $tatami12 = Tatami12::all()->toArray();    
   
   $grupo = Grupo::all();         
   return view('tatami12.index', compact('tatami12','grupo'));
 } 

 public function create()
 {     
   $tatami12 = Tatami12::all();

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $qualificacoes = Qualificacoes::all();
   $torneio = Torneio::all();

   return view("tatami12.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'inscrito'=>$inscrito,'grupo'=>$grupo,'tatami12'=>$tatami12,'qualificacoes'=>$qualificacoes, 'torneio'=>$torneio]); 
 } 

 public function edit($id)
 {
   $tatami12 = Tatami12::find($id);

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $qualificacoes = Qualificacoes::all();
   $torneio = Torneio::all();
   
   return view('tatami12.edit', compact('tatami12','id','arbitro','atleta','escalao','grupo','inscrito','qualificacoes','torneio'));
 }
 public function update(Request $request, $id)
 {      
   request()->validate(  
    [    
      'torneio' => 'required', 
      'atleta1' => 'required', 
      'atleta2' => 'required',  
      'vencedor12' => 'required',
      'vencido' => 'required' 
    ]); 
   Tatami12::find($id)->update($request->all());
   return redirect()->route('tatami12.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40', 
    'torneio' => 'required', 
    'atleta1' => 'required', 
    'atleta2' => 'required',  
    'vencedor12' => 'required',
    'vencido' => 'required' 
  ]);
   $tatami12 = new Tatami12([  
    'torneio' => $request->get('torneio'),
    'atleta1' => $request->get('atleta1'),
    'atleta2' => $request->get('atleta2'), 
    'vencedor12' => $request->get('vencedor12'),
    'vencido' => $request->get('vencido'), 
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Tatami12::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 

 }

 public function destroy($id)
 {
   $tatami12 = Tatami12::find($id);
   $tatami12->delete();

   return redirect('/tatami12');
 }  
}
