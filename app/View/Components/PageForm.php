<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageForm extends Component
{


    public $page;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page = null)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('dashboard.pages.partials.page-form');
    }
}
