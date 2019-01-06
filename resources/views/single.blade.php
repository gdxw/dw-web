@extends('layouts.app')

@section('content')
<div class="posts-detail">
  @while(have_posts()) @php the_post() @endphp
    <aside class="app-banner post-banner background-loaded">
      @php
        $getThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'long-image'); 
      @endphp
      <figure class="app-banner__bg" style="background-image: url({{$getThumbnail[0]}});"></figure> 
      <div class="mo-container">
        <div class="app-banner__body">
          <h1 class="posts-banner__title">{{ get_the_title() }}</h1>
          <div class="posts-banner__info">
            <div class="category">
              <span>分类：</span><p>
                  @php echo get_the_category_list('，', "") @endphp
              </p>
            </div>
            <div class="tags">
              <span>标签：</span><p>
                  @php echo get_the_tag_list('', "，") @endphp
              </p>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <div class="container single-content">
      <div class="row">
        <div class="col-lg-8">
          @include('partials.content-single-'.get_post_type())
        </div>
        <div class="col-lg-4">
            @if (App\display_sidebar())
            <aside class="sidebar"> 
              @php dynamic_sidebar('sidebar-single') @endphp
            </aside>
          @endif
        </div>
      </div>
    </div>
  @endwhile
</div> 

@endsection
