@foreach($posts as $post)
    <div class="col-md-4 text-center text-md-left">
        <img src="{{$post->cover->thumbnail(370, 200)}}" alt="blog image">
        <div class="minimalio-latest-blog-button">
            <button>Перейти</button>
        </div>
        <div class="minimalio-latest-blog-meta">
            <ul>
                <li>{{$post->title}}</li>
            </ul>
        </div>
        <div class="minimalio-latest-blog-content">
            <p>{{substr($post->description, 0, 30)}}</p>
        </div>
    </div>
@endforeach
