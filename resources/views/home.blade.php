@extends('layouts.app')

@section('content')
<h1>Dati da config/data.js: </h1>
@php
 var_dump( $films )   
@endphp
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>
@endsection