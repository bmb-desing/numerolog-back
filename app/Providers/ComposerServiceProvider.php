<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2018
 * Time: 16:02
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot() {
        \View::composer('admin.modules.menu', 'App\Http\Composer\PredictionComposer');
        \View::composer(['modules.pages.header', 'modules.pages.footer', 'sections.inst', 'sections.usluga'], 'App\Http\Composer\SocialComposer');
    }

}