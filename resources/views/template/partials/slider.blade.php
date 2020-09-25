


<div id="minimalio-hero-slide">
    @foreach($sliderItems as $sliderItem)

        <div class="minimalio-hero-slide-item" style="background-image: url({{$sliderItem['photo']->cover->thumbnail(1600, 850)}});">
            <div class="container">
                <div class="minimalio-welcome-section">
                    <div class="minimalio-single-welcome-section">
                        <h2>{{$sliderItem['title']}}</h2>
                        <h1>{{$sliderItem['name']}}</h1>
                        <p>{{$sliderItem['description']}}</p>
                        @if(!empty($sliderItem['buttonLink']))
                            <a class="hero-btn" href="{{$sliderItem['buttonLink']}}">{{$sliderItem['buttonName']}}</a>
                        @endif
                    </div> <!-- end minimalio-single-welcome-section -->
                </div> <!-- end minimalio-welcome-section -->
            </div> <!-- end container -->
        </div>
    @endforeach
</div>
