{{-- 营销学堂 --}}
<article @php post_class('list-item') @endphp>
    <div class="list-item-img">
        <a href="{{ get_permalink() }}">
        @if('' !== get_the_post_thumbnail() && !is_single())
            @php the_post_thumbnail( 'long-image' ) @endphp
        @else
        <span>{{ get_the_title() }}</span>
        @endif
        </a>
    </div>
    <div class="list-item-body">
        <h3 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
        <p class="list-item-time clearfix">
            <time class="updated" datetime="{{ get_post_time('c', true) }}">发布时间：{{ get_the_date() }}</time>
        </p>
    </div>
</article>

<article @php post_class('list-item') @endphp>
    <div class="list-item-img">
        <a href="{{ get_permalink() }}">
        @if('' !== get_the_post_thumbnail() && !is_single())
            @php the_post_thumbnail( 'long-image' ) @endphp
        @else
        <span>{{ get_the_title() }}</span>
        @endif
        </a>
    </div>
    <div class="list-item-body">
        <h3 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
        <p class="list-item-time clearfix">
            <time class="updated" datetime="{{ get_post_time('c', true) }}">发布时间：{{ get_the_date() }}</time>
        </p>
    </div>
</article>
<article @php post_class('list-item') @endphp>
    <div class="list-item-img">
        <a href="{{ get_permalink() }}">
        @if('' !== get_the_post_thumbnail() && !is_single())
            @php the_post_thumbnail( 'long-image' ) @endphp
        @else
        <span>{{ get_the_title() }}</span>
        @endif
        </a>
    </div>
    <div class="list-item-body">
        <h3 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
        <p class="list-item-time clearfix">
            <time class="updated" datetime="{{ get_post_time('c', true) }}">发布时间：{{ get_the_date() }}</time>
        </p>
    </div>
</article>