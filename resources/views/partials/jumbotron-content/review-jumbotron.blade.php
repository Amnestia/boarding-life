@extends('partials.jumbotron')
@section('jumbotron')
    <h1 class="heading-primary">
        <span class="heading-primary--sub">Review {{$review[0]->location->name}}</span>
    </h1>
@endsection