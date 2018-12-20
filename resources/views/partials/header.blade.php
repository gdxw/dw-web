@if(is_home())
<div class="custom-header-banner">
  {{ the_custom_header_markup() }}
</div>
@endif
<header class="main-header {{ is_home() ? 'main-header-index' : ''}}">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      @if ( has_custom_logo() )
        <div class="navbar-brand">{{ the_custom_logo() }}</div>
      @else
        <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }} </a>
      @endif
      <button class="navbar-toggler" type="button" 
          data-toggle="collapse" 
          data-target="#navbarNavAltMarkup" 
          aria-controls="navbarNavAltMarkup" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse"></div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'navbar-nav',
            'container' => false
          ]) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
