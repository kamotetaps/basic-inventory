<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\Item;
use App\Models\Inventory\Category;

class ItemForm extends Component
{
    public $item;
    public $categories;
 protected $rules = [
        'item.name' => 'required|string|max:255',
        'item.code' => 'required|string|max:255|unique:inv_items,code,' . 'id', // For existing records, 'id' will be replaced dynamically
        'item.description' => 'nullable|string|max:255',
        'item.price' => 'nullable|numeric',
        'item.quantity' => 'required|numeric',
        'item.category_id' => 'nullable|exists:inv_categories,id',
    ];
    public function mount($itemId = null)
    {
        $this->categories = Category::all();
        $this->item = $itemId ? Item::find($itemId) : new Item();
    }

    public function save()
    {
        $this->validate([
            'item.name' => 'required|string|max:255',
            'item.code' => 'required|string|max:255|unique:inv_items,code,' . $this->item->id,
            'item.price' => 'nullable|numeric',
			  'item.quantity' => 'required|numeric',
            'item.category_id' => 'nullable|exists:inv_categories,id',
        ]);

        $this->item->save();

        session()->flash('message', 'Item saved successfully.');
    }

    public function render()
    {
        return view('livewire.inventory.item-form')->layout('layouts.app');
    }
}
