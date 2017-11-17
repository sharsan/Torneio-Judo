<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Qualificacoes;

use App\Arbitro;  
use App\Atleta;   
use App\Escalao;
use App\Finalista; 
use App\Grupo;   
use App\Luta12;  
use App\Luta34;  
use App\Torneio; 
use App\Terceiro;  


class QualificacoesController extends Controller
{
  public function index()
  {

   $qualificacoes = Qualificacoes::all()->toArray();        
   return view('qualificacoes.index', compact('qualificacoes'));
 } 

 public function create()
 {     

   $arbitro =Arbitro::all();
   $atleta =Atleta::all();
   $escalao = Escalao::all();
   $finalista = Finalista::all();
   $grupo = Grupo::all();
   $luta12 = Luta34::all();
   $luta34 = Luta34::all();
   $torneio= Torneio::all();
   $terceiro= Terceiro::all();

   return view("qualificacoes.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'finalista'=>$finalista,'grupo'=>$grupo,'luta12'=>$luta12,'luta34'=>$luta34,'terceiro'=>$terceiro,'torneio'=>$torneio]); 
 } 

 public function edit($id)
 {
   $qualificacoes = Qualificacoes::find($id);
   
   $arbitro =Arbitro::all();
   $atleta =Atleta::all();
   $escalao = Escalao::all();
   $finalista = Finalista::all();
   $grupo = Grupo::all();
   $luta12 = Luta34::all();
   $luta34 = Luta34::all();
   $torneio= Torneio::all();
   $terceiro= Terceiro::all();


   return view('qualificacoes.edit', compact('qualificacoes','id','arbitro','atleta','escalao','finalista','grupo','luta12','luta34','terceiro','torneio')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [   
      'torneio' => 'required',
      'primeiro' => 'required',
      'segundo' => 'required' , 
    ]); 
   Qualificacoes::find($id)->update($request->all());
   return redirect()->route('qualificacoes.index')

   ->with('success','Qualificados actualizados com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:qualificacoess|max:40',
    'torneio' => 'required',
    'primeiro' => 'required',
    'segundo' => 'required' 
  ]);
   $qualificacoes = new Qualificacoes([
    'torneio' => $request->get('torneio'),
    'primeiro' => $request->get('primeiro'),
    'segundo' => $request->get('segundo'),
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Qualificacoes::create($request->all());
   return back()->with('success', 'Qualificados adicionados com sucesso'); 

 }

 public function destroy($id)
 {
   $qualificacoes = Qualificacoes::find($id);
   $qualificacoes->delete();

   return redirect('/qualificacoes');
 }  
}
