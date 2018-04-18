@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>dit is Catagorys</p>
    @if(count($catagorys) > 0)
        <ul>
            @foreach($catagorys as $catagory)
                <li>{{$catagory}}</li>
            @endforeach
        </ul>
    @endif
@endsection