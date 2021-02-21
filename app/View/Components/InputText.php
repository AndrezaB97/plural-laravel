<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    public $label;
    public $typeInput;
    public $placeholder;
    public $name;

    public function __construct($label, $typeInput, $placeholder, $name)
    {
        $this->label = $label;
        $this->wireModel = $name;
        $this->typeInput = $typeInput;
        $this->placeholder = $placeholder;
        $this->name = $name;
        
    }

    public function render()
    {
        return view('components.input-text');
    }
}
