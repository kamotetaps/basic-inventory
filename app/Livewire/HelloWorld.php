<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
	public $h=124;
    public function render()
    {
        return view('livewire.hello-world')->layout('layouts.app');
    }
}
