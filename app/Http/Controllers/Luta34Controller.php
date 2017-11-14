<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Luta34;  

use App\Arbitro;  
use App\Atleta;    
use App\Escalao;   
use App\Grupo;     
use App\Inscrito;  
use App\Luta;  
use App\Luta12;  
use App\Torneio; 

class Luta34Controller extends Controller
{

  public function index()
  {
   $luta34 = Luta34::all()->toArray();        
   return view('luta34.index', compact('luta34'));
 } 

 public function create()
 {     
   $luta34 = Luta34::all();

   $arbitro =Arbitro::all(); 
   $atleta =Atleta::all(); 
   $escalao = Escalao::all();
   $grupo = Grupo::all();
   $inscrito = Inscrito::all();
   $luta = Luta::all();
   $torneio = Torneio::all();

   return view("luta34.create",['atleta'=>$atleta,'arbitro'=>$arbitro,'escalao'=>$escalao,'inscrito'=>$inscrito,'grupo'=>$grupo,'luta'=>$luta, 'luta34'=>$luta34, 'torneio'=>$torneio]);
 } 

 public function edit($id)
 {
   $luta34 = Luta34::find($id);

   $torneio = Torneio::all();
   
   return view('luta34.edit', compact('luta34','id', 'torneio')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [    
      'torneio' => 'required', 
      'atleta3' => 'required', 
      'atleta4' => 'required',  
      'vencedor' => 'required',
      'vencido' => 'required' 
    ]); 
   Luta34::find($id)->update($request->all());
   return redirect()->route('luta34.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40', 
    'torneio' => 'required', 
    'atleta3' => 'required', 
    'atleta4' => 'required',  
    'vencedor' => 'required',
    'vencido' => 'required' 
  ]);
   $luta34 = new Luta34([  
    'torneio' => $request->get('torneio'),
    'atleta3' => $request->get('atleta3'),
    'atleta4' => $request->get('atleta4'), 
    'vencedor' => $request->get('vencedor'),
    'vencido' => $request->get('vencido'), 
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Luta34::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 
   
 }

 public function destroy($id)
 {
   $luta34 = Luta34::find($id);
   $luta34->delete();

   return redirect('/luta34');
 }  
}
