@extends('template.main')
@section('content')

    <div class="container">
        <h1>{{$outils[0]}}</h1>
        <h1>{{$outils[1]}}</h1>
        <h1>{{$outils[2]}}</h1>
        <h1>{{$outils[3]}}</h1>
    </div>

    <div class="container">
        @foreach ($outils as $item)
            <h1>{{$item}}</h1>
        @endforeach
    </div>

    
@endsection



