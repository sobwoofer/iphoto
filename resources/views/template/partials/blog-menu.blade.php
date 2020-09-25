<div class="minimalio-blog-tags">
    <h3>TAG</h3>
    <ul>

        <li><a class="item {{!empty($currentTag) ?: 'active'}}" href="{{route('blog')}}">Всі</a></li>
        @foreach($allTags as $tag)
            @php
                $active = $currentTag === $tag->tag ?: 'active';
            @endphp
            <li><a class="item {{$currentTag === $tag->tag ? 'active' : ''}}"
                   href="{{$currentTag === $tag->tag ? '#' : route('blog', ['tag' => $tag->tag])}}">
                    {{$tag->label}}
                </a></li>
        @endforeach
    </ul>
</div> <!-- end minimalio-blog-tags -->
