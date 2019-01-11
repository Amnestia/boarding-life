@extends('partials.jumbotron')
@section('jumbotron')
    <h1 class="heading-primary">
        <span class="heading-primary--main">Boarding Life</span>
        <span class="heading-primary--sub">Ease your life</span>
    </h1>
    <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
    <a href="#" class="btn btn--primary" style="margin-top: 10px;">Near me</a>
@endsection