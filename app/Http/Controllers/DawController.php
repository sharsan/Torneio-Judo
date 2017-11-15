<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daw;  

class DawController extends Controller
{ 
    public function index()
    {
      return view('layouts.daw', compact('daw'));
  } 

  public function create()
  {

   $daw =Daw::all()->toArray(); 

   return view('daw/register', compact('daw'));


   // return view("atleta.create",['categoria'=>$categoria,'clube'=>$clube,'escalao'=>$escalao,'treinador'=>$treinador]);
}

public function store(Request $request)
{
    $rules = array(
        'message'       => 'required',
        'email'      => 'required|email',
        'nerd_level' => 'required|numeric'
    );
    $validator = Validator::make(Input::all(), $rules);

        // process the login
    if ($validator->fails()) {
        return Redirect::to('nerds/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
    } else {
            // store
        $daw = new Daw;
        $daw->name       = Input::get('name');
        $daw->email      = Input::get('email');
        $daw->message = Input::get('daw_level');
        $daw->save();

            // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('daws');
    }
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

    $nerd = Nerd::find($id);
    $nerd->delete();

        // redirect
    Session::flash('message', 'Successfully deleted the nerd!');
    return Redirect::to('nerds');
}
public function send(Request $request)
{
    $subject = $request->input('subject');
    $content = $request->input('content');

    Mail::send('emails.send', ['subject' => $subject, 'message' => $message], function ($message)
    {

        $message->from('isaacbadru@gmail.com', 'Sharsan');

        $message->to('isaacfernandes@yahoo.com.br', 'Badru');

    });

    return response()->json(['message' => 'Request completed']);
}
protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);
}
public function build()
{
    return $this->from('isaacbadru@gmail.com')
    ->view('emails.orders.shipped');
}
}
