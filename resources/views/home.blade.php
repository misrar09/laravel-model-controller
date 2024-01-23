@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($films as $film)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            {{ $film->title }}
                        </h4>
                        <h5 class="card-nationality">
                            {{ $film->nationality }}
                        </h5>
                        <h6 class="card-date">
                            {{ $film->date }}
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
