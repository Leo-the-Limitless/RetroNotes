@extends('layouts.app')

@section('content')

@if ($errors->any())
  <div class="error row">
    @foreach ($errors->all() as $error)
      <li class="col-md-6 col-lg-4">{{ $error }} <i class="fa-solid fa-circle-exclamation" style="color: crimson;"></i></li>
    @endforeach
  </div>
@endif
@if (session('error'))
  <p class="error w-75 mx-auto">{{ session('error') }} <i class="fa-solid fa-circle-exclamation" style="color: crimson;"></i></p>
@endif
<div class="mx-auto retro-card w-75">
  <h3 class="signboard receive-sb">Receive</h3>
  <form action="/receive" method="post" class="p-4 pb-3">
    @csrf
    <div class="form-group row mb-4">
      <label for="noteNum" class="col-sm-2 col-form-label">Note No.</label>
      <div class="col-sm-10">
        <input name="noteNum" value="{{ old('noteNum') }}" type="text" class="form-control" id="noteNum" placeholder="Note Number" autocomplete="off">
      </div>
    </div>
    <div class="form-group row mb-4">
      <label for="sender" class="col-sm-2 col-form-label">Sender</label>
      <div class="col-sm-10">
        <input name="sender" value="{{ old('sender') }}" type="text" class="form-control" id="sender" placeholder="Sender" autocomplete="off">
      </div>
    </div>
    <div class="form-group row mb-4">
      <label for="receiver" class="col-sm-2 col-form-label">Receiver</label>
      <div class="col-sm-10">
        <input name="receiver" value="{{ old('receiver') }}" type="text" class="form-control" id="receiver" placeholder="Receiver" autocomplete="off">
      </div>
    </div>
    <div class="form-group row mb-4">
      <label for="key" class="col-sm-2 col-form-label">Key</label>
      <div class="col-sm-10">
        <input name="key" value="{{ old('key') }}" type="number" class="form-control" id="key" 
        placeholder="Key" autocomplete="off">
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <button type="submit" class="p-1 px-4 submit-btn receive-btn">
         <i class="fa-solid fa-angles-right ms-1"></i>
      </button>
    </div>
  </form>
</div>

@endsection