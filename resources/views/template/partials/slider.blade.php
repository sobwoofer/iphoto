


<div id="minimalio-hero-slide">
    @foreach($sliderPhotos as $sliderPhoto)

        <div class="minimalio-hero-slide-item" style="background-image: url({{$sliderPhoto->cover->thumbnail(1600, 850)}});">
            <div class="container">
                <div class="minimalio-welcome-section">
                    <div class="minimalio-single-welcome-section">
                        <h2>Hello Myself</h2>
                        <h1>Steve Smith</h1>
                        <p>I am a Professional UI &amp; UX Designer</p>
                        <a class="hero-btn" href="#">Hire me</a>
                    </div> <!-- end minimalio-single-welcome-section -->
                </div> <!-- end minimalio-welcome-section -->
            </div> <!-- end container -->
        </div>
    @endforeach
</div>