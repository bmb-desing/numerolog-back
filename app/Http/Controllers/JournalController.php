<?php

namespace App\Http\Controllers;

use App\Journal;
use App\Page;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index() {
        $journal = Journal::latest()->paginate(5);
        $meta = Page::where('alias', 'journal')->first();
        return view('pages.journal.index', ['journal' => $journal, 'meta' => $meta]);
    }
    public function item($item) {
        $journal = Journal::where('alias', $item)->first();
        if (empty($journal)) {
            return abort('404');
        }
        else {
            return view('pages.journal.item', ['journal' => $journal]);
        }
    }
}
