
<div class="minimalio-blog-describe-section">
    <div class="minimalio-blog-img">
        <img src="{{$post->cover->thumbnail(700, 250)}}" alt="{{$post->title}}">
        <p>{{$post->created_at}}</p>
    </div> <!-- end minimalio-blog-img -->
    <div class="minimalio-blog-content">
        <h2>{{$post->title}}</h2>
        <p>{{substr($post->description, 0, 30)}}</p>
    </div>	<!-- end minimalio-blog-content -->
    <div class="row minimalio-blog-comments-readmore">
{{--        <div class="col-md-6 col-sm-6 col-xs-12 minimalio-blog-comments">--}}
{{--            <ul>--}}
{{--                <li><a href="#"><i class="fa fa-refresh"></i></a></li>--}}
{{--                <li><a href="#"><i class="fa fa-comment-o"></i></a></li>--}}
{{--                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <div class="pull-right col-md-6 col-sm-6 col-xs-12 minimalio-blog-readmore">
            <a href="{{route('single-blog', ['id' => $post->id])}}" target="_self">Read More</a>
        </div>
    </div>	<!-- end row and minimalio-blog-comments -->
</div> <!-- end minimalio-blog-img -->
