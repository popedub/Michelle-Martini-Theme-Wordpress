<article @php (post_class()) @endphp>
  <header>
    <h1 class="entry-title text-center text-uppercase">{!! get_the_title() !!}</h1>

  </header>
  <div class="entry-content">
    <div class="embed-responsive embed-responsive-16by9">
      <video class="video-js embed-responsive-item" data-setup='{"controls": true}'>
        <source
          src="https://player.vimeo.com/external/327644597.hd.mp4?s=5c8912899e72dc4acf1765591367edea99350b78&profile_id=175"
          type="video/mp4">

      </video>
    </div>

    <div class="info row">
      <div class="col-12 col-lg-4">
        @php
        echo __('Dir:', 'mmtheme')
        @endphp
        {{ $director }}
        @php
        echo __('Production Co:', 'mmtheme')
        @endphp
        {{ $production }}
      </div>
      <div class="col-12 col-lg-4">
        @php
        echo __('With:', 'mmtheme')
        @endphp
        {{ $interpreters }}
      </div>
      <div class="col-12 col-lg-4">
        @if ($extra_col_1)
        @php
        echo __('INFO', 'mmtheme')
        @endphp
        @endif
      </div>
    </div>
    <div class="more-info row">
      <div class="col-12 col-lg-4">
        {{ $extra_col_1 }}
      </div>
      <div class="col-12 col-lg-4">
        {{ $extra_col_2 }}
      </div>
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>

</article>
