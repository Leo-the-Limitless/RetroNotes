@extends("layouts.app")

@section("content")

<h1 class="text-center mt-4">
  Choose a Stamp
</h1>
<div class="send-section container-fluid p-0 row align-items-center">
  <div class="col">
    <img src="{{ asset('images/stamps/butterfly.png') }}" alt="Butterfly-stamp" class="stamp-img">
    <a href="/send/butterfly" class="stamp-btn butterfly-btn">Butterfly</a>
  </div>
  <div class="col">
    <img src="{{ asset('images/stamps/daisy.png') }}" alt="Daisy-stamp" class="stamp-img">
    <a href="/send/daisy" class="stamp-btn daisy-btn">Daisy</a>
  </div>
  <div class="col">
    <img src="{{ asset('images/stamps/fall.png') }}" alt="Fall-stamp" class="stamp-img">
    <a href="/send/autumn" class="stamp-btn autumn-btn">Autumn</a>
  </div>
  <div class="col">
    <img src="{{ asset('images/stamps/love.png') }}" alt="Love-stamp" class="stamp-img">
    <a href="/send/heart" class="stamp-btn heart-btn">Heart</a>
  </div>
  <div class="col">
    <img src="{{ asset('images/stamps/night sky.png') }}" alt="Night-sky-stamp" class="stamp-img">
    <a href="/send/moon" class="stamp-btn moon-btn">Moon</a>
  </div>
  
</div>

@endsection