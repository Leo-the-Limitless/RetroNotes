@extends("layouts.app")

@section("content")
<div class="container d-flex align-items-center home-section w-50 retro-card">
  <div class="mx-auto">
    <h2 class="text-center mb-3">
      Passing Notes in Secrecy
    </h2>
    <h4 class="text-center">
      As if we're in the 90s
    </h4>
    <div class="text-center d-flex">
      <a class="route-btn send-btn" href="/send"><i class="fa-solid fa-paper-plane d-block mb-4"></i> Send a Note</a>
      <a class="route-btn receive-btn" href="/receive"><i class="fa-solid fa-envelope-open d-block mb-4"></i> Receive a Note</a>
    </div>
  </div>
</div>

@endsection