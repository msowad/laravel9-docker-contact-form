<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class Input extends Component
{
    public string $rowsAttr;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $placeholder, public string $name, public string $type = 'text', public string $component = 'input', public int $row = 3)
    {
        $this->rowsAttr = $this->component == 'textarea' ? 'rows=' . $this->row . '' : '';
        Log::info($this->rowsAttr);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
