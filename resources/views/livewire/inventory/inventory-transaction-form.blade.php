<div>
    <h1>{{ $transaction->exists ? 'Edit Transaction' : 'Add New Transaction' }}</h1>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="item_id" class="block text-gray-700">Item</label>
            <select id="item_id" wire:model="transaction.item_id" class="mt-1 block w-full border-gray-300 rounded">
                <option value="">Select Item</option>
                @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('transaction.item_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="transaction_type" class="block text-gray-700">Transaction Type</label>
            <select id="transaction_type" wire:model="transaction.transaction_type" class="mt-1 block w-full border-gray-300 rounded">
                <option value="purchase">Purchase</option>
                <option value="sale">Sale</option>
                <option value="adjustment">Adjustment</option>
            </select>
            @error('transaction.transaction_type') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="quantity" class="block text-gray-700">Quantity</label>
            <input type="number" id="quantity" wire:model="transaction.quantity" class="mt-1 block w-full border-gray-300 rounded" />
            @error('transaction.quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price</label>
            <input type="number" id="price" wire:model="transaction.price" class="mt-1 block w-full border-gray-300 rounded" step="0.01" />
            @error('transaction.price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700">Date</label>
            <input type="date" id="date" wire:model="transaction.date" class="mt-1 block w-full border-gray-300 rounded" />
            @error('transaction.date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="supplier_id" class="block text-gray-700">Supplier</label>
            <select id="supplier_id" wire:model="transaction.supplier_id" class="mt-1 block w-full border-gray-300 rounded">
                <option value="">Select Supplier</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
            @error('transaction.supplier_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $transaction->exists ? 'Update' : 'Create' }}</button>
    </form>
</div>
