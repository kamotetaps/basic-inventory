<div>
    <h1>Item Location List</h1>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Item</th>
                <th class="py-2 px-4 border-b">Location</th>
                <th class="py-2 px-4 border-b">Quantity</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $location->item ? $location->item->name : 'N/A' }}</td>
                    <td class="py-2 px-4 border-b">{{ $location->location }}</td>
                    <td class="py-2 px-4 border-b">{{ $location->quantity }}</td>
                    <td class="py-2 px-4 border-b">
                        <button wire:click="edit({{ $location->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="delete({{ $location->id }})" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('item-location.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Item Location</a>
    </div>
</div>
