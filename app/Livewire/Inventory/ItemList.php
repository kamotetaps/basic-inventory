<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\Item;

class ItemList extends Component
{
    public $items;

    public function mount()
    {
        $this->items = Item::all();
    }

    public function render()
    {
        return view('livewire.inventory.item-list')->layout('layouts.app');
    }
}
