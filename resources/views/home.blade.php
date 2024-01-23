@extends('layouts.app')

@section('content')
<ul>
    @foreach ($films as $film)
        <li>
            {{$film->title}}
        </li>
    @endforeach
</ul>

@endsection