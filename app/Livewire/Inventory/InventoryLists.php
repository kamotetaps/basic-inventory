<?php

namespace App\Livewire\Inventory;

use Livewire\Component;

class InventoryLists extends Component
{
    public function render()
    {
        return view('livewire.inventory.inventory-lists')->layout('layouts.app');
    }
}
