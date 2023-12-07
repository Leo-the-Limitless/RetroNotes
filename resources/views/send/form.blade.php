@extends("layouts.app")

@section("content")

<!-- <h1>{{$stamp}}</h1> -->
@if ($errors->any())
  <div class="error row">
    @foreach ($errors->all() as $error)
      <li class="col-md-6 col-lg-4">{{ $error }} <i class="fa-solid fa-circle-exclamation" style="color: crimson;"></i></li>
    @endforeach
  </div>
@endif
<div class="mx-auto retro-card w-75">
  <h3 class="signboard send-sb">Send</h3>
  <form action="/send/{{ $stamp }}" method="post" class="p-4 pb-3">
    @csrf
    <div class="form-group row mb-3">
      <label for="sender" class="col-sm-2 col-form-label">Sender</label>
      <div class="col-sm-10">
        <input name="sender" value="{{ old('sender') }}" type="text" class="form-control" id="sender" placeholder="Sender" autocomplete="off">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="receiver" class="col-sm-2 col-form-label">Receiver</label>
      <div class="col-sm-10">
        <input name="receiver" value="{{ old('receiver') }}" type="text" class="form-control" id="receiver" placeholder="Receiver" autocomplete="off">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="note" class="col-sm-2 col-form-label">Note</label>
      <div class="col-sm-10">
        <textarea name="note" id="tabbable-note" 
        style="white-space: pre-wrap; resize: none;" 
        class="form-control" rows="8" cols="50" 
        placeholder="Write your note here ..." autocomplete="off">{{ old('note') }}</textarea>
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="key" class="col-sm-2 col-form-label">Key</label>
      <div class="col-sm-10">
        <input name="key" value="{{ old('key') }}" type="number" class="form-control" id="key" 
        placeholder="A 6-digit-key to seal your note" autocomplete="off">
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <button class="p-1 px-4 submit-btn send-btn">
         <i class="fa-solid fa-angles-right ms-1"></i>
      </button>
    </div>
  </form>
</div>

@endsection