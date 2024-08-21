<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\ItemLocation;
use App\Models\Inventory\Item;

class ItemLocationForm extends Component
{
    public $location;
    public $items;
    public $item_id;
    public $location_name;  // Renaming 'location' to avoid confusion with the model
    public $quantity;

    protected $rules = [
        'item_id' => 'required|exists:inv_items,id',
        'location_name' => 'required|string|max:255',
        'quantity' => 'required|integer',
    ];

    public function mount($locationId = null)
    {
        $this->items = Item::all();
        if ($locationId) {
            $this->location = ItemLocation::find($locationId);
            $this->item_id = $this->location->item_id;
            $this->location_name = $this->location->location;
            $this->quantity = $this->location->quantity;
        } else {
            $this->location = new ItemLocation();
            $this->item_id = '';
            $this->location_name = '';
            $this->quantity = 0;
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->location->exists) {
            $this->location->update([
                'item_id' => $this->item_id,
                'location' => $this->location_name,
                'quantity' => $this->quantity,
            ]);
        } else {
            $this->location = ItemLocation::create([
                'item_id' => $this->item_id,
                'location' => $this->location_name,
                'quantity' => $this->quantity,
            ]);
        }

        session()->flash('message', 'Location saved successfully.');
    }

    public function render()
    {
        return view('livewire.inventory.item-location-form')->layout('layouts.app');
    }
}
