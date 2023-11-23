@extends("layouts.app")

@section("content")
<div class="container d-flex align-items-center home-section">
  <div class="mx-auto">
    <h2 class="text-center">
      Passing notes in secrecy
    </h2>
    <h4 class="text-center">
      As if we're in the 90s
    </h4>
    <div class="p-5 text-center d-flex">
      <a class="route-btn" href="/send"><i class="fa-solid fa-paper-plane d-block mb-4"></i> Send a Note</a>
      <a class="route-btn" href="/receive"><i class="fa-solid fa-envelope-open d-block mb-4"></i> Receive a Note</a>
    </div>
  </div>
</div>

@endsection