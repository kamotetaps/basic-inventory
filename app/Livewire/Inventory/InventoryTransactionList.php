<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\InventoryTransaction;

class InventoryTransactionList extends Component
{
    public $transactions;

    public function mount()
    {
        $this->transactions = InventoryTransaction::with(['item', 'supplier'])->get();
    }

    public function render()
    {
        return view('livewire.inventory.inventory-transaction-list')->layout('layouts.app');
    }
}
