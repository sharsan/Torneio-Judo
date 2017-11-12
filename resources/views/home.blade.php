@extends('layouts.app') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"> 

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <center>
                    <img src="{{URL::asset('/image/judo.png')}}" alt="profile Pic" height="600" width="900">
                </center>

                
            </div>
        </div>
    </div>
    @endsection
