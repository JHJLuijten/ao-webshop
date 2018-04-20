@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$title}}</h1>
        <p>dit is Catagorys</p>
    
        @if(count($catagorys) > 0)
            <ul class="list-group">
                @foreach($catagorys as $catagory)
                    <li class="list-group-item">{{$catagory}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection