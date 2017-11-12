<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Luta;
use App\Grupo; 
use App\Arbitro; 

class LutaController extends Controller
{
  
  public function index()
  {
    
   $luta = Luta::all()->toArray();        
   return view('luta.index', compact('luta'));
 } 

 public function create()
 {     

   $grupo = Grupo::all();
   $arbitro =Arbitro::all(); ;
   return view("luta.create",['grupo'=>$grupo,'arbitro'=>$arbitro]); 
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
      'atleta1' => 'required',
      'atleta2' => 'required',
      'vencedor' => 'required' 
    ]); 
   Luta::find($id)->update($request->all());
   return redirect()->route('luta.index')

   ->with('success','Luta actualizada com sucesso');  
 }  

 public function store(Request $request)
 {      
   $this->validate(request(), [
        // 'nome' => 'required|unique:lutas|max:40',
    'atleta' => 'required'
  ]);
   $luta = new Luta([
    'grupo' => $request->get('grupo'),
    'atleta1' => $request->get('atleta1'),
    'atleta2' => $request->get('atleta2'),
    'vencedor' => $request->get('vencedor'), 
    'juri' => $request->get('juri'),  
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Luta::create($request->all());
   return back()->with('success', 'Luta adicionada com sucesso'); 
   
 }

 public function destroy($id)
 {
   $luta = Luta::find($id);
   $luta->delete();

   return redirect('/luta');
 }  
}
