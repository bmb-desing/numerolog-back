<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2018
 * Time: 15:58
 */

namespace App\Http\Composer;


use App\Social;
use Illuminate\Contracts\View\View;
class SocialComposer
{
    protected $page;
    public function __construct(Social $social)
    {
        $this->social = $social;
    }
    public function compose(View $view) {
        $soc = $this->social->all();
        $socialArray = array();
        foreach ($soc as $i => $item) {
            $socialArray[$item->name] = $item->value;
        }
        return $view->with(['social' => $socialArray]);
    }

}