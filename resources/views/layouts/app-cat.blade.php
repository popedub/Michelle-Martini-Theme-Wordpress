<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php (body_class()) @endphp>
  @php do_action('get_header') @endphp
  @include('partials.header')
  <div class="fixleft">@php echo __('COSTUME DESIGNER', 'sage')@endphp</div>

  <div class="wrap container-fluid" role="document">
    <div class="content">
      <main class="main">

        <div class="content-sizer col-12">

          <div class="row grid">
            @yield('content')
          </div>
        </div>
      </main>
      @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
      @endif
    </div>
  </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp
</body>

</html>
