<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendFormRequest;
use App\Http\Requests\ReceiveFormRequest;
use App\Models\Note;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class NoteController extends Controller
{
    public function send() {
        return view('send.send');
    }

    public function fill($stamp) {
        return view('send.form', [
            'stamp' => $stamp
        ]);
    }

    public function filled($stamp, SendFormRequest $request) {
        $validatedData = $request->validated();

        $note = new Note;
        $note->sender = $validatedData['sender'];
        $note->receiver = $validatedData['receiver'];
        $note->stamp = $stamp;
        $note->key = $validatedData['key'];
        $note->note = $validatedData['note'];
        $note->save();

        $note->noteNumber = sprintf('%05d', $note->id);
        $note->save();

        return redirect('/sent')->with([
            'note' => $note, 
        ]);
    }

    public function sent() {
        $note = session('note');
        $stamp = session('stamp');

        if($note == NULL) {
            return redirect('/send');
        }

        return view('send.sent', [
            'note' => $note,
        ]);
    }

    public function receive() {
        return view('receive.receive');
    }

    public function received(ReceiveFormRequest $request)
    {
        $note = Note::find($request->noteNum);

        if (is_null($note)) {
            return redirect()->back()->withErrors(['error' => 'Invalid note number'])->withInput();
        }

        if ($note->sender !== $request->sender) {
            return redirect()->back()->withErrors(['error' => 'Invalid sender'])->withInput();
        } elseif ($note->receiver !== $request->receiver) {
            return redirect()->back()->withErrors(['error' => 'Invalid receiver'])->withInput();
        } elseif ($note->key !== $request->key) {
            return redirect()->back()->withErrors(['error' => 'Invalid key'])->withInput();
        }

        return view('receive.received', [
            'note' => $note,
        ]);
    }

    public function read(Request $request) 
    {
        if ($request->noteNumber == NULL || $request->key == NULL) {
            abort(403, 'Invalid noteNumber or key');
        }

        $note = Note::find($request->noteNumber);

        if (is_null($note)) {
            abort(403, 'Invalid noteNumber');
        } else if ($note->key !== $request->key) {
            abort(403, 'Invalid key');
        }

        return view('receive.read', [
            'note' => $note,
        ]);
    }
}
