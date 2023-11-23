<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        return view('send');
    }

    public function fill($stamp) {
        return 'OK';
    }
}
