@extends('layouts.app')

@section('content')
<div class="container-full">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
</div>
@endsection
