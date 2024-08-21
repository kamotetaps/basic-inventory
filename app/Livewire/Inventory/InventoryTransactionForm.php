<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\InventoryTransaction;
use App\Models\Inventory\Item;
use App\Models\Inventory\Supplier;

class InventoryTransactionForm extends Component
{
    public $transaction;
    public $items;
    public $suppliers;
 protected $rules = [
 'transaction.item_id' => 'required|exists:inv_items,id',
            'transaction.transaction_type' => 'required|in:purchase,sale,adjustment',
            'transaction.quantity' => 'required|integer',
            'transaction.price' => 'required|numeric',
            'transaction.date' => 'required|date',
            'transaction.supplier_id' => 'nullable|exists:inv_suppliers,id',
 ];
    public function mount($transactionId = null)
    {
        $this->items = Item::all();
        $this->suppliers = Supplier::all();
        $this->transaction = $transactionId ? InventoryTransaction::find($transactionId) : new InventoryTransaction();
    }

    public function save()
    {
        $this->validate([
            'transaction.item_id' => 'required|exists:inv_items,id',
            'transaction.transaction_type' => 'required|in:purchase,sale,adjustment',
            'transaction.quantity' => 'required|integer',
            'transaction.price' => 'required|numeric',
            'transaction.date' => 'required|date',
            'transaction.supplier_id' => 'nullable|exists:inv_suppliers,id',
        ]);

        $this->transaction->save();

        session()->flash('message', 'Transaction saved successfully.');
    }

    public function render()
    {
        return view('livewire.inventory.inventory-transaction-form')->layout('layouts.app');
    }
}
