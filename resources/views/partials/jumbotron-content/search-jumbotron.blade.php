@extends('partials.jumbotron')
@section('jumbotron')
    @include('partials.jumbotron-content.heading-text')
    <form action="/search/1" method="GET" id="search-form" class="search">
        {{csrf_field()}}
        <input type="text" id="search-box" name="search" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" id="search-btn" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </form>
    {{--<a href="#" class="btn btn--primary" style="margin-top: 10px;">Near me</a>--}}
@endsection