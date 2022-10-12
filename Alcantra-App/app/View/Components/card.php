<?php

namespace App\View\Components;

use Illuminate\View\Component;


class card extends Component
{
    
    
    public $nameuser;
    public $imgposts;
    public $imguser;
    public $title ;
    public $text;
    public $likes;
    public $favorited;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imguser ,$nameuser,$imgposts,$title,$text,$likes,$favorited)
    {
        //
        $this->nameuser = $nameuser;
        $this->imgposts = $imgposts;
        
        $this->imguser = $imguser;
        $this->title = $title;
        $this->text = $text;
        $this->likes = $likes;
        $this->favorited = $favorited;
        
        

        
        
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
