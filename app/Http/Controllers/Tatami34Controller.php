<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Tatami34;  

use App\Arbitro;  
use App\Atleta;    
use App\Escalao;   
use App\Grupo;     
use App\Inscrito;   
use App\Qualificacoes;  
use App\Torneio; 

class Tatami34Controller extends Controller
{

  public function index()
  {
   $tatami34 = Tatami34::all()->toArray();    
   
   $grupo = Grupo::all();         
   return view('tatami34.index', compact('tatami34','grupo'));
} 

public function create()
{     
   $tatami34 = Tatami34::all();

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $qualificacoes = Qualificacoes::all();
   $torneio = Torneio::all();

   return view("tatami34.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'inscrito'=>$inscrito,'grupo'=>$grupo,'tatami34'=>$tatami34,'qualificacoes'=>$qualificacoes, 'torneio'=>$torneio]); 
} 

public function edit($id)
{
   $tatami34 = Tatami34::find($id);

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $qualificacoes = Qualificacoes::all();
   $torneio = Torneio::all();
   
   return view('tatami34.edit', compact('tatami34','id','arbitro','atleta','escalao','grupo','inscrito','qualificacoes','torneio'));
}
public function update(Request $request, $id)
{      
   request()->validate(  
    [    
      'torneio' => 'required', 
      'atleta3' => 'required', 
      'atleta4' => 'required',  
      'vencedor34' => 'required',
      'vencido' => 'required' 
  ]); 
   Tatami34::find($id)->update($request->all());
   return redirect()->route('tatami34.index')

   ->with('success','Luta actualizada com sucesso');  
}  

public function store(Request $request)
{      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40', 
    'torneio' => 'required', 
    'atleta3' => 'required', 
    'atleta4' => 'required',  
    'vencedor34' => 'required',
    'vencido' => 'required' 
]);
   $tatami34 = new Tatami34([  
    'torneio' => $request->get('torneio'),
    'atleta3' => $request->get('atleta3'),
    'atleta4' => $request->get('atleta4'), 
    'vencedor34' => $request->get('vencedor34'),
    'vencido' => $request->get('vencido'), 
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
]);
   Tatami34::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 

}

public function destroy($id)
{
   $tatami34 = Tatami34::find($id);
   $tatami34->delete();

   return redirect('/tatami34');
}  
}
