<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\ItemLocation;

class ItemLocationList extends Component
{
    public $locations;

    public function mount()
    {
        $this->locations = ItemLocation::with('item')->get();
    }

    public function render()
    {
        return view('livewire.inventory.item-location-list')->layout('layouts.app');
    }
}
