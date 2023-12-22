@extends('layouts.app')

@section('content')

<div class="mx-auto px-4 pb-3 custom-note">
  <img src="{{ asset('images/stamps/' . $note['stamp'] . '.png') }}" alt={{ $note['stamp'] . '-stamp' }} class="letter-stamp">
  <p class="note-names">
    To <span class="ms-1">{{ $note['receiver'] }}</span>
  </p>{{ $note['note'] }}
  <p class="note-names float-end">
    From <span class="ms-1">{{ $note['sender'] }}</span>
  </p>
</div>
<div class="d-flex justify-content-end mx-auto" style="width: 55%;">
  <a href="/">
    <button class="mt-4 p-1 px-4 read-btn">
        Home <i class="fa-solid fa-angles-right ms-1"></i>
    </button>
  </a>
</div>

@endsection