<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $menus;

    public function __construct(?array $menus = null)
    {
        $this->menus = $menus ?? config('navigation.menus', []);
    }

    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
