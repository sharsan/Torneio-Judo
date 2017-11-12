<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Escalao;  

class EscalaoController extends Controller
{
  public function index()
  {
   $escalao = Escalao::all()->toArray();
   
   return view('escalao.index', compact('escalao'));
 }
 
 public function create()
 {
   $escalao = new Escalao();
   return view("escalao.create",compact('escalao')); 
 } 
 
 public function edit($id)
 {
   $escalao = Escalao::find($id);
   
   return view('escalao.edit', compact('escalao','id')); 
 } 

 public function update(Request $request, $id)
 {          
   request()->validate(  
    [   
      'nome' => 'required' 
    ]); 
   Escalao::find($id)->update($request->all());
   return redirect()->route('escalao.index')

   ->with('success','Escalao actualizado com sucesso');   
 }
 public function store(Request $request)
 {     
   $this->validate(request(), [
     'nome' => 'required|unique:escalaos|max:20',
   ]);
   $escalao = new Escalao([
    'nome' => $request->get('nome'), 
               //campos de exigencia de valores
  ]);
   Escalao::create($request->all());
   return back()->with('success', 'Escalao adicionado com sucesso'); 
   
 }
 
 
 public function destroy($id)
 {
   $escalao = Escalao::find($id);
   $escalao->delete();

   return redirect('/escalao');
 }  
}
