@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="container page-404">
      <div class="row">
        <div class="col-md-7 error-img">
          <img src="@asset('images/404.svg')"/>
        </div>
        <div class="col-md-5 error-content">
            <h2>404</h2>
            <p>抱歉，你访问的页面不存在</p>
            <a href="/" class="btn btn-primary">回到首页</a>
        </div>
      </div>
    </div>
  @endif
@endsection
