@extends("partials.master")
@section('content')
    @include('partials.jumbotron-content.search-jumbotron')
    <div id="search-result">
        <section class="section-food">
            @isset($results)
                <h2 class="heading-secondary u-center u-mb-big">Result</h2>
                <div class="collection">
                    @foreach($results as $res)
                        @if(!($res instanceOf \App\Location) && $res==$results['totalPage'])
                            @break
                        @endif
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
                <div class="pagination-nav">
                        @if($results['currPage']!=1)
                            <a class="navigation__left" href="/search/{{$results['currPage']-1}}"  style="margin:10px;font-size: 20px"><i class="left"></i>Previous</a>
                        @endif
                        @if($results['currPage']!=$results['totalPage'])
                            <a class="navigation__right" href="/search/{{$results['currPage']+1}}" style="margin:10px;font-size: 20px">Next<i class="right"></i></a>
                        @endif
                </div>
            @endisset
        </section>
    </div>
@endsection