<?php

namespace App\View\Components\Utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalDelete extends Component
{
    /**
     * Create a new component instance.
     */
    public $action;
    public function __construct($action=null)
    {
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.utils.modal-delete');
    }
}
