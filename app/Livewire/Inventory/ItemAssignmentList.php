<?php

namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\ItemAssignment;
use App\Models\User; // Import User model from the correct namespace

class ItemAssignmentList extends Component
{
    public $itemAssignments;

    public function mount()
    {
        $this->itemAssignments = ItemAssignment::with(['item', 'user'])->get();
    }

    public function render()
    {
        return view('livewire.inventory.item-assignment-list');
    }
}
