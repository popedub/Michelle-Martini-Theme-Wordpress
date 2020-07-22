@extends('layouts.app')

@section('content')

<div class="gallery-home">
  @forelse ($home_gallery as $foto)
  <div style="background-color:{{  $foto->color }}; color: {{  $foto->font_color }}">
    <img class="img-fluid foto-home" src="{{  $foto->photo->url }}" alt="{{  $foto->photo->alt }}">
    <div class="row h-100">
      <div class="col-sm-12 my-auto">
        <div class="ti-gallery-home text-center">
          <h1>MICHELLE <span>&nbsp;</span>MARTINI</h1>
          <h2>CUSTUME<span>&nbsp;</span> DESIGNER</h2>
        </div>

      </div>

    </div>

  </div>
  @empty

  @endforelse
</div>

@endsection
