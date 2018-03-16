<?php

namespace App\Http\Controllers\Admin;

use App\Journal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journal = Journal::all();
        return view('admin.pages.journal.index', ['journal' => $journal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.journal.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'alias' => 'required|unique:journals,alias',
            'meta' => 'required|array',
            'text' => 'required',
            'thumbnail' => 'required',
            'short_text' => 'required'
        ]);
        $status = Journal::create([
            'alias' => $request->alias,
            'meta' => [
                'title' => $request->meta['title'],
                'name' => $request->meta['name'],
                'description' => $request->meta['description']
            ],
            'thumbnail' => $request->thumbnail,
            'short_text' => $request->short_text,
            'text' => $request->text,
            'publish' => 1
        ]);
        if ($status) {
            $this->clearCache();

            \Session::flash('flash_message', 'Статья успешно добавлена');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal = Journal::findOrFail($id);
        return view('admin.pages.journal.edit', ['journal' => $journal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $journal = Journal::findOrFail($id);
        $this->validate($request, [
            'alias' => 'required|unique:journals,alias,'.$journal->alias.',alias',
            'meta' => 'required|array',
            'text' => 'required',
            'thumbnail' => 'required',
            'short_text' => 'required'
        ]);
        $status = $journal->fill([
            'alias' => $request->alias,
            'meta' => [
                'title' => $request->meta['title'],
                'name' => $request->meta['name'],
                'description' => $request->meta['description']
            ],
            'thumbnail' => $request->thumbnail,
            'short_text' => $request->short_text,
            'text' => $request->text,
        ])->save();
        if ($status) {
            $this->clearCache();
            \Session::flash('flash_message', 'Статья успешно обновлена');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journal::findOrFail($id);
        $status = $journal->delete();
        if($status) {
            $this->clearCache();

            \Session::flash('flash_message','Успешно удалено');
            return redirect()->back();
        }
    }
}
