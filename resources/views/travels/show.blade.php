@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column align-items-center justify-content-center">

    <h1>{{$travel->destination}}</h1>

    <img height="600" class="py-5" src="{{$travel->image}}" alt="{{$travel->hotel}}">

    <h3><strong>Prezzo</strong> {{$travel->price}} euro</h3>

</div>



@endsection