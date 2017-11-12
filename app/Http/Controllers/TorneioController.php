<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Torneio; 
use App\Estado;  

class TorneioController extends Controller
{
  public function index()
  {
   $torneio = Torneio::all()->toArray();        
   return view('torneio.index', compact('torneio'));
 } 

 public function create()
 {     
   $torneio = new Torneio();
   return view("torneio.create",compact('torneio'));   
 } 
 
 public function edit($id)
 {
   $torneio = Torneio::find($id);
   
   return view('torneio.edit', compact('torneio','id')); 
 } 

 public function update(Request $request, $id)
 {      
   request()->validate(  
    [   
      'nome' => 'required' 
    ]); 
   Torneio::find($id)->update($request->all());
   return redirect()->route('torneio.index')

   ->with('success','Torneio actualizado com sucesso');  
 }   

 public function store(Request $request)
 {      
   $this->validate(request(), [
    'nome' => 'required|unique:torneios|max:40',
  ]);
   $torneio = new Torneio([
    'nome' => $request->get('nome'),  
    'datai' => $request->get('datai'),   
    'datat' => $request->get('datat'),   
    'descricao' => $request->get('descricao')
               //campos de exigencia de valores
  ]);
   Torneio::create($request->all());
   return back()->with('success', 'Torneio adicionado com sucesso'); 
   
 }

 public function destroy($id)
 {
   $torneio = Torneio::find($id);
   $torneio->delete();

   return redirect('/torneio');
 }  
}
