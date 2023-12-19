@extends('layouts.app')

@section('content')

<h3 class="text-center mx-auto mb-3">Note Received!</h3>
<div class="mx-auto letter-preview">
  <img src="{{ asset('images/stamps/' . $note['stamp'] . '.png') }}" alt="" class="letter-stamp">
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
<div class="d-flex justify-content-center">
  <form action='/read/{{ $note['noteNumber'] }}' method="post">
    <input type="text" class="d-none" name="noteNumber" value={{ $note['noteNumber'] }}>
    <input type="text" class="d-none" name="key" value={{ $note['key'] }}>
    <button class="mt-4 p-1 px-4 read-btn">
        Read
    </button>
  </form>
</div>

@endsection