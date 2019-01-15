@extends('layouts.app')

@section('content')
<div class="container list-content">
    {!! bootstrap_breadcrumb() !!}
    <div class="row">
        <div class="col-lg-8">
            <div class="page-list">
                <div class="search-list-box">
                    {!! get_search_form(false) !!}
                </div>
                <div class="results-content">
                  @if (!have_posts())
                    <div class="not-results">
                      <img src="@asset('images/404.svg')" alt="not-results"><span>没有查询到结果</span>
                    </div>
                  @endif
                  @while(have_posts()) @php the_post() @endphp
                    @include('partials.content-search')
                  @endwhile
                  {!! dw_pagination() !!}
                </div>
            </div>
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
@endsection
