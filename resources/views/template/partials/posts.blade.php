@foreach($posts as $post)
    <div class="col-md-4">
        <img src="{{$post->cover->thumbnail(370, 200)}}" alt="blog image">
        <div class="minimalio-latest-blog-button">
            <button>On Page</button>
        </div>
        <div class="minimalio-latest-blog-meta">
            <ul>
                <li>{{$post->title}}</li>
                <li><a href="#"><i class="fa fa-heart"></i>55</a></li>
                <li><a href="#"><i class="fa fa-comment-o"></i>55</a></li>
            </ul>
        </div>
        <div class="minimalio-latest-blog-content">
            <h3>{{$post->title}}</h3>
            <p>{{substr($post->description, 0, 30)}}</p>
        </div>
        <div class="minimalio-latest-blog-readmore">
            <a href="#">Read more <i class="ion-ios-arrow-thin-right"></i></a>
        </div>
    </div>
@endforeach