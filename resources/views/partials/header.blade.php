<header class="banner">
  <div class="container-fluid">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>


  </div>
  <a id="menu" class="btn-menu">@svg('ico-menu', 'ico-menu')</a>
</header>
<div class="overlay overlay-slidedown">

  <button type="button" id="closeMenu" class="overlay-close font-3">Close</button>
  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</div>
