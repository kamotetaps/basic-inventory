<?php

namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\ItemAssignment;
use App\Models\Inventory\Item;
use App\Models\User;

class ItemAssignmentForm extends Component
{
    public ItemAssignment $itemAssignment;
    public $items; // Available items
    public $users; // Users to assign items to
    public $isEdit = false;

    protected $rules = [
        'itemAssignment.item_id' => 'required|exists:inv_items,id',
        'itemAssignment.user_id' => 'required|exists:users,id',
        'itemAssignment.serial_number' => 'nullable|string|max:255',
        'itemAssignment.assigned_at' => 'required|date',
        'itemAssignment.status' => 'required|in:assigned,in_use,returned,in_repair',
        'itemAssignment.photo' => 'nullable|string|max:255',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $this->isEdit = true;
            $this->itemAssignment = ItemAssignment::findOrFail($id);
        } else {
            $this->itemAssignment = new ItemAssignment();
        }

        $this->items = Item::all();
        $this->users = User::all();
    }

    public function save()
    {
        $this->validate();

        $this->itemAssignment->save();

        session()->flash('message', $this->isEdit ? 'Item assignment updated successfully.' : 'Item assigned successfully.');

        return redirect()->route('item.assignments.list');
    }

    public function render()
    {
        return view('livewire.inventory.item-assignment-form')->layout('layouts.app');
    }
}
