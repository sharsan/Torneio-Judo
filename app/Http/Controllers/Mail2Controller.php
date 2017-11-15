<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Mail2;
use App\Estado; 
use App\Clube;   

class Mail2Controller extends Controller
{ 
    public function index()
    {

       $mail2 = Mail2::all()->toArray();        
       return view('mail2.index', compact('mail2'));
   }

   public function create()
   {

    $mail2 = new Mail2();
    return view("mail2.create",compact('mail2')); 
}

public function store(Request $request)
{

   $this->validate(request(), [
         // 'sender_name' => 'required|unique:clubes|max:40',
    'email' => 'required|unique:users, email',
]);
   $mail2 = new Mail2([
    'sender_name' => $request->get('sender_name'),  
    'recipient_name' => $request->get('recipient_name'),  
    'recipient_email' => $request->get('recipient_email'),  
    'subject' => $request->get('subject'),  
    'content' => $request->get('content')
               //campos de exigencia de valores 


]);
   Mail2::create($request->all());
   return back()->with('success', 'Email enviado com sucesso'); 
}

public function show($id)
{
        //
}

public function edit($id)
{
        //
}

public function update(Request $request, $id)
{
        //
}

public function destroy($id)
{
        //
}
}
