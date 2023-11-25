@extends("layouts.app")

@section("content")
<div class="mx-auto home-section w-50 retro-card">
  <h6 class="signboard title-sb justify-content-start p-3">
    <i class="fa-solid fa-circle dots" style="color: #CC572F;"></i>
    <i class="fa-solid fa-circle dots" style="color: #DDA84D;"></i>
    <i class="fa-solid fa-circle dots" style="color: #25897D;"></i>
  </h6>
  <div class="mx-auto d-flex justify-content-center">
    <div class="p-5">
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
</div>

@endsection