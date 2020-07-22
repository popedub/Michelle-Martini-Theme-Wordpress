@php
$size = get_field('featured_image')
@endphp

<article @php (post_class( $size)) @endphp>
  <a href="{{ get_permalink() }}">
    @if (has_post_thumbnail())
    <div class="bck" style="background-image: url(<?php the_post_thumbnail_url();?> )">
      <h3> @php the_field('subtitle')@endphp </h3>
    </div>
    @endif
    <h2 class="entry-title text-center text-uppercase">{!! get_the_title() !!}</h2>
  </a>
</article>
