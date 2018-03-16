<?php

namespace App\Http\Controllers;

use App\Journal;
use App\Page;
use App\Price;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $price = Price::latest()->get();
        $journal = Journal::latest()->limit(3)->get();
        $meta = Page::where('alias', '/')->first();
        return view('pages.index', [
            'price' => $price,
            'journal' => $journal,
            'meta' => $meta
        ]);
    }
}
