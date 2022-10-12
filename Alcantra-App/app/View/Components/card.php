<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    public $ImgUser = 'default';
    public $NameUser = 'erro ao carregar';
    public $ImgPost = 'default-img-post';
    public $title = 'não foi possível carregar o titulo';
    public $text = 'não foi possível carregar o texto';
    public $likes = 'erro';
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        //
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
