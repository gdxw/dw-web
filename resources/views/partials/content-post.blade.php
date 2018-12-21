

<article @php post_class() @endphp>
    <div class="card" style="width: 18rem;">
        @if('' !== get_the_post_thumbnail() && ! is_single())
        <div class="card-img-top" alt="Card image cap">
            @php the_post_thumbnail( 'twentyseventeen-featured-image' ) @endphp
        </div>
        @endif
        <div class="card-body">
            <h3 class="card-title entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
            <div>
                @php echo $tags_list @endphp
            </div>
            <a href="{{ get_permalink() }}" class="btn btn-primary">详情</a>
        </div>
    </div>
</article>
