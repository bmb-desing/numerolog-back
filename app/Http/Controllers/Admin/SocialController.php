<?php

namespace App\Http\Controllers\Admin;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function get() {
        $social = Social::all();
        return view('admin.pages.social.edit', ['social' => $social]);
    }
    public function post(Request $request) {
        $input = $request->except('_token');

        foreach ($input as $key => $item) {
            $val = Social::where('name', $key)->first();
            $val->fill([
                'value' => $item
            ])->save();
        }
        $this->clearCache();
        \Session::flash('flash_message','Успешно удалено');
        return redirect()->back();
    }
}
