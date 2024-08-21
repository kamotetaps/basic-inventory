<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\Supplier;

class SupplierForm extends Component
{
    public $supplier;

    public function mount($supplierId = null)
    {
        $this->supplier = $supplierId ? Supplier::find($supplierId) : new Supplier();
    }

    public function save()
    {
        $this->validate([
            'supplier.name' => 'nullable|string|max:255',
            'supplier.contact' => 'nullable|string|max:255',
            'supplier.phone' => 'nullable|string|max:255',
            'supplier.email' => 'nullable|email|max:255',
            'supplier.address' => 'nullable|string',
        ]);

        $this->supplier->save();

        session()->flash('message', 'Supplier saved successfully.');
    }

    public function render()
    {
        return view('livewire.inventory.supplier-form')->layout('layouts.app');
    }
}
