@extends('partials.master')

@section('content')
    @include('partials.jumbotron')
    <section class="section-food">
        <h2 class="heading-secondary u-center u-mb-big">Food Near Me</h2>

        <div class="collection">
            <div class="collection__item">
                <img src="{{URL::asset('img/food-1.jpeg')}}" alt="Food Photo 1" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/food-2.jpg')}}" alt="Food Photo 2" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/food-3.jpeg')}}" alt="Food Photo 3" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/food-4.jpeg')}}" alt="Food Photo 4" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
    
            <div class="collection__item">
                <img src="{{URL::asset('img/food-5.jpeg')}}" alt="Food Photo 5" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/food-6.jpeg')}}" alt="Food Photo 6" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
        </div>

        
    </section>

    <section class="section-store">
        <h2 class="heading-secondary u-center u-mb-big">Store Near Me</h2>

        <div class="collection">
            <div class="collection__item">
                <img src="{{URL::asset('img/store-1.jpeg')}}" alt="Store Photo 1" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/store-2.jpeg')}}" alt="Store Photo 2" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/store-3.jpeg')}}" alt="Store Photo 3" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            {{-- <div class="collection__item">
                <img src="{{URL::asset('img/food-4.jpeg')}}" alt="Food Photo 4" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
    
            <div class="collection__item">
                <img src="{{URL::asset('img/food-5.jpeg')}}" alt="Food Photo 5" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div>
            
            <div class="collection__item">
                <img src="{{URL::asset('img/food-6.jpeg')}}" alt="Food Photo 6" class="collection__img">
                <div class="collection__rating">4.5</div>
                <div class="collection__description">
                    <p class="collection__name">Latteria Gelato and Dessert</p>
                    <p class="collection__address">Ruko Crown Gold, PIK, Jakart</p>
                    <p class="collection__tag">Dessert, Ice Cream</p>
                </div>
            </div> --}}
        </div>
    </section>
@endsection