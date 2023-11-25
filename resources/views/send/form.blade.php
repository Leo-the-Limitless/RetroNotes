@extends("layouts.app")

@section("content")

<!-- <h1>{{$stamp}}</h1> -->
<div class="mx-auto retro-card w-75">
  <h3 class="signboard send-sb">Send</h3>
  <form action="/sent" method="post" class="p-4 pb-3">
    <div class="form-group row mb-3">
      <label for="sender" class="col-sm-2 col-form-label">Sender</label>
      <div class="col-sm-10">
        <input name="sender" type="text" class="form-control" id="sender" placeholder="Sender">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="receiver" class="col-sm-2 col-form-label">Receiver</label>
      <div class="col-sm-10">
        <input name="receiver" type="text" class="form-control" id="receiver" placeholder="Receiver">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="note" class="col-sm-2 col-form-label">Note</label>
      <div class="col-sm-10">
        <textarea name="note" id="note" style="white-space: pre-wrap; resize: none;" class="form-control" rows="8" cols="50" placeholder="Write your note here ..."></textarea>
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="key" class="col-sm-2 col-form-label">Key</label>
      <div class="col-sm-10">
        <input name="key" type="password" class="form-control" id="key" placeholder="Seal your note with a 🔑">
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