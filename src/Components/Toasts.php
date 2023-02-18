<?php

namespace Pleshkovpa\ToastsLivewire\Components;

use Livewire\Component;

class Toasts extends Component
{
    public $color;
    public $message;

    protected $listeners = ['showToast'];

    public function render()
    {
        return view('toasts-livewire::toasts');
    }

    public function showToast($color, $message)
    {
        $this->color = $color;
        $this->message = $message;

        $this->emit('showBootstrapToast');
    }
}
