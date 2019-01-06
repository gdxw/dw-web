<section class="main-case text-center">
<div class="case-bg"><img src="{{ get_stylesheet_directory_uri() }}/assets/images/bg2.png" alt=""></div>
    <div class="container">
      <div class="case-container">
          <h3 class="section-title">我们的案例</h3>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">   
                        @php 
                          $case_args = array(
                            'category_name' => 'case',
                            'posts_per_page' => 3
                          );
                          $case_query = new WP_Query($case_args);
                        @endphp
                        @while ($case_query->have_posts()) @php $case_query->the_post() @endphp
                          <div class="col-sm-4">
                            {{-- 案例 --}}
                              <article @php post_class() @endphp>
                                  <div class="card">
                                      <div class="card-img-top" alt="Card image cap">
                                        <a href="{{ get_permalink() }}">
                                            @php the_post_thumbnail('long-image') @endphp
                                            @if('' !== get_the_post_thumbnail() && !is_single())
                                                @php get_the_post_thumbnail() @endphp
                                            @else
                                                <span>{{ get_the_title() }}</span>
                                            @endif
                                        </a>
                                      </div>
                                      <div class="card-body">
                                          <h3 class="card-title entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
                                          <div class="card-text entry-summary">
                                              @php the_excerpt() @endphp
                                          </div>
                                          <div class="tags">
                                              @php echo get_the_tag_list() @endphp
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                        @endwhile
                        @php wp_reset_query(); @endphp
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="iconfont icon-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="iconfont icon-right"></i>
              </a>
          </div>
      </div> 
    </div>
</section>