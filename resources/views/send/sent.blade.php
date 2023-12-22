@extends('layouts.app')

@section('content')

<h3 class="text-center mx-auto mb-3">Note Sent!</h3>
<h6 class="text-center mx-auto mb-3" style="color: crimson;">Note them down or snap a pic! Your person will need these detials to receive your note.<i class="fa-solid fa-circle-exclamation"></i></h6>
<div class="mx-auto letter-preview">
  <img src="{{ asset('images/stamps/' . $note['stamp'] . '.png') }}" alt={{ $note['stamp'] . '-stamp' }} class="letter-stamp">
  <div>
    <p class="credentials letter-names">
      From {{ $note['sender'] }}
    </p>
  </div>
  <p class="credentials letter-names">
    To {{ $note['receiver'] }}
  </p>
  <div class="row title-row">
    <p class="credentials col">
      Note No.
    </p>
    <p class="credentials col key">
      Key
    </p>
  </div>
  <div class="row details-row">
    <p class="credentials col">
      {{ $note['noteNumber'] }}
    </p>
    <p class="credentials key-number col">
      {{ $note['key'] }}
    </p>
  </div>
</div>
<div class="d-flex justify-content-end mx-auto" style="width: 55%;">
  <a href="/">
    <button class="mt-4 p-1 px-4 read-btn">
        Home <i class="fa-solid fa-angles-right ms-1"></i>
    </button>
  </a>
</div>

@endsection