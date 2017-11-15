<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estt;  
use App\Torneio;  
use App\Estado; 

class EsttController extends Controller
{
  public function index()
  {
   $et = Estt::all()->toArray();

   return view('estadotorneio.index', compact('et'));
 }

 public function create()
 {

   $et =Estt::all();
   $torneio =Torneio::all();
   $estado =Estado::all();
   return view("estadotorneio.create",['torneio'=>$torneio,'estado'=>$estado ]); 
 } 

 public function edit($id)
 {
   $et = Estt::find($id);

   $torneio =Torneio::all();
   $estado =Estado::all();
   return view('estadotorneio.edit', compact('et','id','estado','torneio')); 
 }  

 public function update(Request $request, $id)
 {          
   request()->validate(  
    [   
      'torneio' => 'required',
      'estado' => 'required'
    ]); 
   Estt::find($id)->update($request->all());

   return redirect()->route('et.index')

   ->with('success','Estado do torneio actualizado com sucesso');   
 }

 public function store(Request $request)
 {     
   $this->validate(request(), [
    'torneio' => 'required|unique:estts|max:40',
  ]);
   $et = new Estt([
    'torneio' => $request->get('torneio'),
    'estado' => $request->get('estado'), 
               //campos de exigencia de valores
  ]);
   Estt::create($request->all());
   return back()->with('success', 'Estado adicionado com sucesso'); 

 }

 public function destroy($id)
 {
   $et = Estt::find($id);
   $et-> delete();

   return redirect('et');
 }  
}
