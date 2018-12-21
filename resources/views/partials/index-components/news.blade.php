{{-- 新闻 --}}
<div class="news-item">
    <div class="row">
        <div class="col-4 news-item-img">
            <a href="{{ get_permalink() }}">
                @if('' !== get_the_post_thumbnail() && !is_single())
                    @php the_post_thumbnail( 'long-image' ) @endphp
                @else
                <span>{{ get_the_title() }}</span>
                @endif
            </a>
        </div>
        <div class="col-8 news-item-body">
            <h5 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
            <p class="news-item-time">
                发布时间：<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
            </p>
            <div class="news-item-text">
                @php the_excerpt() @endphp
            </div>
        </div>
    </div>
</div>

{{-- 新闻 --}}
<div class="news-item">
        <div class="row">
            <div class="col-4 news-item-img">
                <a href="{{ get_permalink() }}">
                    @if('' !== get_the_post_thumbnail() && !is_single())
                        @php the_post_thumbnail( 'long-image' ) @endphp
                    @else
                    <span>{{ get_the_title() }}</span>
                    @endif
                </a>
            </div>
            <div class="col-8 news-item-body">
                <h5 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
                <p class="news-item-time">
                    发布时间：<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
                </p>
                <div class="news-item-text">
                    @php the_excerpt() @endphp
                </div>
            </div>
        </div>
    </div>


    {{-- 新闻 --}}
<div class="news-item">
        <div class="row">
            <div class="col-4 news-item-img">
                <a href="{{ get_permalink() }}">
                    @if('' !== get_the_post_thumbnail() && !is_single())
                        @php the_post_thumbnail( 'long-image' ) @endphp
                    @else
                    <span>{{ get_the_title() }}</span>
                    @endif
                </a>
            </div>
            <div class="col-8 news-item-body">
                <h5 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
                <p class="news-item-time">
                    发布时间：<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
                </p>
                <div class="news-item-text">
                    @php the_excerpt() @endphp
                </div>
            </div>
        </div>
    </div>