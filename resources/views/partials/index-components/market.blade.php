{{-- 营销学堂 --}}
<div class="market-item">
    <div class="row">
        <div class="col-4 market-item-img">
            <a  href="{{ get_permalink() }}">
                @php the_post_thumbnail( 'square-image' ) @endphp
                @if('' !== get_the_post_thumbnail() && !is_single())
                    @php get_the_post_thumbnail() @endphp
                @else
                <span>{{ get_the_title() }}</span>
                @endif
            </a></div>
        <div class="col-8">
            <h5 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h5>
            <p>
                发布时间：<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
            </p>
        </div>
    </div>
</div>

{{-- 营销学堂 --}}
<div class="market-item">
        <div class="row">
            <div class="col-4 market-item-img">
                <a  href="{{ get_permalink() }}">
                    @php the_post_thumbnail( 'square-image' ) @endphp
                    @if('' !== get_the_post_thumbnail() && !is_single())
                        @php get_the_post_thumbnail() @endphp
                    @else
                    <span>{{ get_the_title() }}</span>
                    @endif
                </a></div>
            <div class="col-8">
                <h5 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h5>
                <p>
                    发布时间：<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
                </p>
            </div>
        </div>
    </div>


    {{-- 营销学堂 --}}
<div class="market-item">
        <div class="row">
            <div class="col-4 market-item-img">
                <a  href="{{ get_permalink() }}">
                    @php the_post_thumbnail( 'square-image' ) @endphp
                    @if('' !== get_the_post_thumbnail() && !is_single())
                        @php get_the_post_thumbnail() @endphp
                    @else
                    <span>{{ get_the_title() }}</span>
                    @endif
                </a></div>
            <div class="col-8">
                <h5 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h5>
                <p>
                    发布时间：<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
                </p>
            </div>
        </div>
    </div>