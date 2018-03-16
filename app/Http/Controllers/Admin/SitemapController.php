<?php

namespace App\Http\Controllers\Admin;

use App\Journal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Roumen\Sitemap\Sitemap;

class SitemapController extends Controller
{
    public function siteMap(Sitemap $map) {
        $domain = 'https://'.$_SERVER['SERVER_NAME'];
        $sitemap = \App::make('sitemap');
        $sitemap->add($domain, Carbon::now(),  '1.0', 'monthly');
        $sitemap->add($domain.'/journal', Carbon::now(),  '1.0', 'monthly');
        $journal = Journal::all();
        foreach ($journal as $item) {
            $sitemap->add($domain.'/journal/'.$item->alias, $item->updated_at, '0.6', 'monthly');
        }
        $sitemap->store('xml', 'sitemap');
        \Session::flash('flash_message', 'Sitemap уопешно обновлена');
        return redirect()->route('admin.index');
    }
}
