<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Arbitro;  


class ArbitroController extends Controller
{
  public function index()
  {
    $arbitro =Arbitro::all()->toArray();      
    return view("arbitro.index",compact('arbitro'));
  }
  public function create()
  {                                               
   return view("arbitro.create",compact('arbitro')); 
 }

 public function edit($id)
 {        
   $arbitro = Arbitro::find($id);
   return view('arbitro.edit',compact('arbitro','id'));
 } 

 public function store(Request $request)
 {     
   $existe=$request->get('idade')!="";

   if($existe==true){
     $this->validate(request(), [
      'idade'=> 'numeric|min:10|max:90',  
    ]);
   }
   else{  

     $this->validate(request(), [
       'nome' => 'required|unique:arbitros|min:3,max:40', 
     ]);
   }

   $arbitro = new Arbitro([
    'nome' => $request->get('nome'),
    'apelido' => $request->get('apelido'),   
    'sexo' => $request->get('sexo'), 
    'telefone' => $request->get('telefone'),
    'email' => $request->get('email'),
    'descricao' => $request->get('descricao')

  ]);

   Arbitro::create($request->all());
   return back()->with('success', 'Arbitro adicionado com sucesso'); 

 }         
 public function update(Request $request, $id)
 { 
   request()->validate(  
    [   
      'nome' => 'required|unique:atletas|min:13,max:40',  
    ]); 
   Arbitro::find($id)->update($request->all());
   return redirect()->route('arbitro.index')

   ->with('success','Arbitro actualizado com sucesso'); 
 } 
 public function destroy(Request $request, $id)

 {

   Arbitro::find($id)->delete();
        // return back()->with('success', 'Arbitro apagado com sucesso');
   return redirect()->route('arbitro.index')

   ->with('success','Arbitro apagado com successo');

 }  
 public function testPhotoCanBeUploaded()
 {
   $this->visit('/upload')
   ->attach($pathToFile, 'photo')
   ->press('Upload')
   ->see('Upload Successful!');
 }  
}