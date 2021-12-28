<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{

    public $title;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct($title = 'Título de sección'){
        $this->title = $title;
    }

    public function render()
    {
        return view('layouts.app');
    }
}
