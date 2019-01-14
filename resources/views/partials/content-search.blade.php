
<article @php post_class('list-item') @endphp>
  <div class="list-item-img">
    <a href="{{ get_permalink() }}">
      @if('' !== get_the_post_thumbnail() && !is_single())
          @php the_post_thumbnail( 'long-image' ) @endphp
      @else
      <span>{{ get_the_title() }}</span>
      @endif
    </a>
    @if (get_the_category_list('，', ""))
      <div class="category">
        @php echo get_the_category_list('，', "") @endphp
      </div>
    @endif
  </div>
  <div class="list-item-body">
      <h3 class="text-truncate"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
      <div class="item-text">
          @php the_excerpt() @endphp
      </div>
      <p class="list-item-time">
         <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
         @if (get_the_tag_list('', "，"))
          <span class="tags">
            <span>标签：</span> @php echo get_the_tag_list('', "，") @endphp
          </span>
        @endif
      </p>
  </div>
</article>
