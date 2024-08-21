<div>
    <h1>Supplier List</h1>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Contact</th>
                <th class="py-2 px-4 border-b">Phone</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Address</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $supplier->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $supplier->contact }}</td>
                    <td class="py-2 px-4 border-b">{{ $supplier->phone }}</td>
                    <td class="py-2 px-4 border-b">{{ $supplier->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $supplier->address }}</td>
                    <td class="py-2 px-4 border-b">
                        <button wire:click="edit({{ $supplier->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="delete({{ $supplier->id }})" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('supplier.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Supplier</a>
    </div>
</div>
