@extends('partials.jumbotron')
@section('jumbotron')
    <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
    <a href="#" class="btn btn--primary" style="margin-top: 10px;">Near me</a>
@endsection