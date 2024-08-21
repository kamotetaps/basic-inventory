<div>
    <h1>Inventory Transaction List</h1>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Item</th>
                <th class="py-2 px-4 border-b">Transaction Type</th>
                <th class="py-2 px-4 border-b">Quantity</th>
                <th class="py-2 px-4 border-b">Price</th>
                <th class="py-2 px-4 border-b">Date</th>
                <th class="py-2 px-4 border-b">Supplier</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $transaction->item ? $transaction->item->name : 'N/A' }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->transaction_type }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->quantity }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->price }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->date->format('Y-m-d') }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->supplier ? $transaction->supplier->name : 'N/A' }}</td>
                    <td class="py-2 px-4 border-b">
                        <button wire:click="edit({{ $transaction->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="delete({{ $transaction->id }})" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('transaction.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Transaction</a>
    </div>
</div>
