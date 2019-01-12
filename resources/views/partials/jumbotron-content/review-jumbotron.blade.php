@extends('partials.jumbotron')
@section('jumbotron')
    @isset($review[0])
    <h1 class="heading-primary">
        <span class="heading-primary--sub">Review {{$review[0]->location->name}}</span>
    </h1>
    @endisset
@endsection