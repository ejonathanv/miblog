<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{

    public $title;
    public $metadescription;
    public $metakeywords;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct($title = null, $metadescription = null, $metakeywords = null){
        $this->title = $title;
        $this->metadescription = $metadescription ? $metadescription : 'Blog de Jonathan Velazquez en Tijuana Baja California';
        $this->metakeywords = $metakeywords ? $metakeywords : 'Blog, Emprender, Emprendimiento, Programación, Desarrollo Web, Paginas Web, Paginas, Web, Sitios Web, Sitios, Tijuana, Baja California, Tj, Paginas Web en Tijuana, Jonathan, Velazquez, Jonathan Velazquez';
    }

    public function render()
    {
        return view('layouts.guest');
    }
}
