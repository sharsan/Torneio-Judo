<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Luta;

use App\Arbitro;  
use App\Atleta;   
use App\Escalao;
use App\Finalista; 
use App\Grupo;   
use App\Luta12;  
use App\Luta34;  
use App\Torneio; 
use App\Terceiro;  

class LutaController extends Controller
{

  public function index()
  {

   $luta = Luta::all()->toArray();        
   return view('luta.index', compact('luta'));
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

   return view("luta.create",['arbitro'=>$arbitro,'atleta'=>$atleta,'escalao'=>$escalao,'finalista'=>$finalista,'grupo'=>$grupo,'luta12'=>$luta12,'luta34'=>$luta34,'terceiro'=>$terceiro,'torneio'=>$torneio]); 
 } 

 public function edit($id)
 {
   $luta = Luta::find($id);
   
   return view('luta.edit', compact('luta','id')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [   
      'torneio' => 'required',
      'primeiro' => 'required',
      'segundo' => 'required' , 
    ]); 
   Luta::find($id)->update($request->all());
   return redirect()->route('luta.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40',
    'torneio' => 'required',
    'primeiro' => 'required',
    'segundo' => 'required' 
  ]);
   $luta = new Luta([
    'torneio' => $request->get('torneio'),
    'primeiro' => $request->get('primeiro'),
    'segundo' => $request->get('segundo'),
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Luta::create($request->all());
   return back()->with('success', 'Lutas adicionadas com sucesso'); 
   
 }

 public function destroy($id)
 {
   $luta = Luta::find($id);
   $luta->delete();

   return redirect('/luta');
 }  
}
