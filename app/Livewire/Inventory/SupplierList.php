<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\Supplier;

class SupplierList extends Component
{
    public $suppliers;

    public function mount()
    {
        $this->suppliers = Supplier::all();
    }

    public function render()
    {
        return view('livewire.inventory.supplier-list')->layout('layouts.app');
    }
}
