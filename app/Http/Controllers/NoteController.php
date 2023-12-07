<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendFormRequest;

class NoteController extends Controller
{
    public function index() {
        return view('send.send');
    }

    public function fill($stamp) {
        return view('send.form', [
            'stamp' => $stamp
        ]);
    }

    public function filled($stamp, SendFormRequest $request) {
        $validatedData = $request->validated();
        return view('send.sent', [
            'data' => $validatedData
        ]);
    }
}
