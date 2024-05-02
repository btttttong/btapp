<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navigation extends Component
{
    public $menu = [];

    public function __construct()
    {
        $this->menu = [
            ['name' => 'Lucky charm 💅🏻', 'url' => '/'],
            ['name' => 'Card of the day 🔮', 'url' => '/card'],
            // ['name' => 'TRYOUT 🪞', 'url' => '/tryout'],
            // ['name' => 'Promotions 💵', 'url' => '/promo'],
            ['name' => 'login', 'url' => '/login'],
        ];

        $this->rightmenu = [
            ['name' => 'Your Profile', 'url' => '/profile'],
            ['name' => 'Settings', 'url' => '/setting'],
            ['name' => 'Sign out', 'url' => '/logout'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation');
    }
}
