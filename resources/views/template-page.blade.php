{{--
  Template Name: 普通模版
--}}

@extends('layouts.app')

@section('content')
<div class="container page-container">
  {!! bootstrap_breadcrumb() !!}
  <div class="row">
    <div class="col-lg-8">
      <div class="page-content">
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-page')
        @endwhile
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
