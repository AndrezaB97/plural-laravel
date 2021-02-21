<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputCheckbox extends Component
{
    public $name;
    public $type;
    
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input-checkbox');
    }
}
