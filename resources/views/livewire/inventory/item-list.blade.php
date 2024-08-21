<div>
    <h1>Item List</h1>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Code</th>
                <th class="py-2 px-4 border-b">Price</th>
                <th class="py-2 px-4 border-b">Category</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $item->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->code }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->price }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->category ? $item->category->name : 'N/A' }}</td>
                    <td class="py-2 px-4 border-b">
                        <button wire:click="edit({{ $item->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('item.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Item</a>
    </div>
</div>
