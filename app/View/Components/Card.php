<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;

    public $button;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tieude,$nutnhan = true)
    {
        $this->title = __($tieude);
        $this->button = $nutnhan;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
