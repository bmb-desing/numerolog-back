<?php

namespace App\Http\Controllers\Admin;

use App\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = Price::all();
        return view('admin.pages.price.index', ['price' => $price]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.price.add');
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
            'name' => 'required',
            'price' => 'required|array'
        ]);
        $input = $request->all();
        $status = Price::create($input);
        if ($status) {
            $this->clearCache();
            \Session::flash('flash_message', 'Успешно добавлено');
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
        $price = Price::findOrFail($id);
        return view('admin.pages.price.edit', ['price' => $price]);
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
        $price = Price::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|array'
        ]);
        $input = $request->all();
        $status = $price->fill($input)->save();
        if ($status) {
            $this->clearCache();
            \Session::flash('flash_message', 'Успешно обновлено');
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
        $price = Price::findOrFail($id);
        $status = $price->delete();
        if($status) {
            $this->clearCache();
            \Session::flash('flash_message','Успешно удалено');
            return redirect()->back();
        }
    }
}
