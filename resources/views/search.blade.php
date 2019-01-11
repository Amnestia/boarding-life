@extends("partials.master")
@section('content')
    @include('partials.jumbotron-content.search-jumbotron')
    <div id="search-result">
        <section class="section-food">
            @isset($results)
                <h2 class="heading-secondary u-center u-mb-big">Result</h2>
                <div class="collection">
                    @foreach($results as $res)
                        <div class="collection__item">
                            <img src="{{URL::asset('img/food-1.jpeg')}}" alt="Food Photo 1" class="collection__img">
                            <div class="collection__rating">
                                {{$res['positive']}} <i class="fa fa-thumbs-up"></i> {{$res['negative']}} <i class="fa fa-thumbs-down"></i>
                            </div>
                            <div class="collection__description">
                                <p class="collection__name">{{$res->name}}</p>
                                <p class="collection__address">{{$res->address}}</p>
                                <p class="collection__tag">{{$res->type}}</p>
                            </div>
                            <a href="/review/{{$res->id}}" class="btn btn--primary" style="width: 100%;">Check Review</a>
                        </div>
                    @endforeach
                </div>
            @endisset
        </section>
    </div>
@endsection