<header class="main-header {{ is_home() ? 'main-header-index' : 'main-header-page'}}">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
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
        <span class="navbar-toggler-icon iconfont icon-menu"></span>
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
