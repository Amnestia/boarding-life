@extends("partials.master")
@section('content')
    @include('partials.jumbotron-content.review-jumbotron')
    @isset($review[0])
    <div id="reviews">
        <div class="collection">
            <div class="collection__item">
                <img src="{{URL::asset('img/food-1.jpeg')}}" alt="Food Photo 1" class="collection__img">
                <div class="collection__description">
                    <p class="collection__name">{{$review[0]->location->name}}</p>
                    <p class="collection__address">{{$review[0]->location->address}}</p>
                    <p class="collection__tag">{{$review[0]->location->type}}</p>
                </div>
            </div>
            <div class="collection__item">
                <div class="collection__description review-block">
                    @foreach($review as $r)
                        <p class="collection__address">
                            @if($r->status==1)
                                <i class="fa fa-thumbs-up"></i>
                            @else
                                <i class="fa fa-thumbs-down"></i>
                            @endif
                            {{$r->review}}
                            <div style="text-align: right">
                                <span>{{$r->user->name}}</span>
                            </div>
                        </p>
                    @endforeach
                </div
            </div>
        </div>
        @include('partials.review-form')
    </div>
    @endisset
@endsection