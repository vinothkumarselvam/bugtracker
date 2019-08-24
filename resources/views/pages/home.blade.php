@extends('layouts.app')
    
    @section('title', 'Home Page')

    @section('content')

    <div class="jumbotron">
        <h1 class="display-4">Home {{ $name }}</h1>
            <p class="lead">Bugs Count: {{ $status_count }}.</p>
        <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
    @endsection