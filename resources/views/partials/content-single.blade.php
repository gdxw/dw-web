{{-- <article @php post_class() @endphp>
  
</article> --}}
<div class="page-single">
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <div class="author-time">
    <p class="byline author vcard">
      作者：
        <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
          {{ get_the_author() }}
        </a>
      <time class="updated fr" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    </p>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</div>