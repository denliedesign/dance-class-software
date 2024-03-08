<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public $category;
    public $info;

    public function __construct($category, $info)
    {
        $this->category = $category;
        $this->info = $info;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
