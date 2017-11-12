<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    public function index()
    {
       $estado = Estado::all()->toArray();
       
       return view('estado.index', compact('estado'));
   }
   
   public function create()
   {
       $estado = new Estado();
       return view("estado.create",compact('estado')); 
   } 
   
   public function edit($id)
   {
       $estado = Estado::find($id);
       
       return view('estado.edit', compact('estado','id')); 
   } 

   public function store(Request $request)
   {     
     $this->validate(request(), [
         'nome' => 'required|unique:estados|max:20',
     ]);
     $estado = new Estado([
        'nome' => $request->get('nome'), 
               //campos de exigencia de valores
    ]);
     Estado::create($request->all());
     return back()->with('success', 'Estado adicionado com sucesso'); 
     
 }
 
 public function update(Request $request, $id)
 {          
     request()->validate(  
      [   
          'nome' => 'required' 
      ]); 
     Estado::find($id)->update($request->all());
     return redirect()->route('estado.index')

     ->with('success','Estado actualizado com sucesso');   
 }
 
 public function destroy($id)
 {
     $estado = Estado::find($id);
     $estado->delete();

     return redirect('/estado');
 }  
}
