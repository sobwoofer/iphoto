<div class="minimalio-services-menus">
    <div class="container">
        <ul class="minimalio-lavalamp-darrow">
            <li class="minimalio-arrow-down"><a href="#" data-filter="*">All</a></li>
            @foreach($tags as $tag)
                <li class="minimalio-arrow-down"><a href="#" data-filter=".{{$tag->tag}}">{{$tag->label}}</a></li>
            @endforeach
        </ul> <!-- end minimalio-lavalamp-darrow -->
    </div> <!-- end container -->
</div>	<!-- end minimalio-services-menus -->

<!-- start minimalio-services-content -->
<div class="minimalio-services-content">
    <div class="container-fluid">
        <!-- Start minimalio-grid -->
        <div class="minimalio-grid minimalio-new-layout">
            @foreach($tags as $tag)
                @foreach($tag->photos as $photo)
                    <div class="minimalio-grid-item {{$tag->tag}}">
                        <div class="minimalio-img-container minimalio-new-service-item">
                            <img src="{{$photo->cover->thumbnail(415)}}" alt="{{$photo->title . ' Chugunova Tetiana Photography'}}">
                            <a href="{{$photo->cover->thumbnail(1080, null)}}">
                                <div class="minimalio-hover-overlay">
                                    <div class="minimalio-hover">
                                        <span>+</span>
                                        <p>UI&amp;UX DESIGN</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endforeach

        </div> <!-- end minimalio-grid -->
        <div class="minimalio-load-more-2">
            <a href="#">Load More</a>
        </div> <!-- end minimalio-load-more -->
    </div>
</div> <!-- end minimalio-services-content -->

