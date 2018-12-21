@extends('layouts.app')

@section('banner')
  @include('partials.index-components.main-banner')
  @include('partials.index-components.canwe')
  @include('partials.index-components.advantage')
  @include('partials.index-components.case')
@endsection

{{-- 案例 --}}
@section('content')
<setion class="news-market">
  <div class="row">
    <div class="col-4">
      <h3>营销学堂</h3>
      <div class="market-content">
        @php 
        $market_args = array(
          'category_name' => 'marketing',
          'posts_per_page' => 5
        );
        $market_query = new WP_Query($market_args);
        @endphp
        @while ($market_query->have_posts()) @php $market_query->the_post() @endphp
          @include('partials.index-components.market')
        @endwhile
        @php wp_reset_query(); @endphp
      </div>
    </div>
    <div class="col">
      <h3 class="news-title">新闻咨询</h3>
      <div class="news-content">
        @php 
        $news_args = array(
          'category_name' => 'news',
          'posts_per_page' => 5
        );
        $news_query = new WP_Query($news_args);
        @endphp
        @while ($news_query->have_posts()) @php $news_query->the_post() @endphp
          @include('partials.index-components.news')
        @endwhile
        @php wp_reset_query(); @endphp
      </div>
    </div>
  </div>
</setion>
{!! get_the_posts_navigation() !!}
@endsection