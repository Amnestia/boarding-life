@extends("partials.master")
@section('content')
    @include('partials.jumbotron-content.review-jumbotron')
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
                <div class="collection__description" style="text-align: left;font-size: 12px;color: black">
                    @foreach($review as $r)
                        <p class="collection__address">
                            @if($r->status==1)
                                <i class="fa fa-thumbs-up"></i>
                            @else
                                <i class="fa fa-thumbs-down"></i>
                            @endif
                            {{$r->review}}
                        </p>
                    @endforeach
                </div
            </div>
        </div>
        @if(auth()->user())
            <div class="form-wrapper">
                <form action="/insert/review/{{$review[0]->location->id}}" method="POST" id="review-form">
                    {{csrf_field()}}
                    <div class="form__group">
                        <label for="review" class="form__label">Review</label>
                        <input type="text" class="form__field" id="review" name="review" placeholder="delicious" required>
                    </div>
                    <div class="form__group">
                        <label for="review-good" class="form__label">Review</label>
                        <input type="radio" name="status" id="review-good" value="1"><i class="fa fa-thumbs-up"  style="font-size: 12px">Good</i>
                        <input type="radio" name="status" id="review-bad" value="-1"><i class="fa fa-thumbs-down" style="font-size: 12px">Bad</i>
                    </div>
                    <div class="form__group">
                        <input type="submit" id="btn-submit" class="form__submit" value="Submit">
                    </div>
                </form>
            </div>
        @endif
        </div>
@endsection