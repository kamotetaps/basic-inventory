<div>
    <h1>{{ $location->exists ? 'Edit Location' : 'Add New Location' }}</h1>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="item_id" class="block text-gray-700">Item</label>
            <select id="item_id" wire:model="item_id" class="mt-1 block w-full border-gray-300 rounded">
                <option value="">Select an item</option>
                @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('item_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="location_name" class="block text-gray-700">Location</label>
            <input type="text" id="location_name" wire:model="location_name" class="mt-1 block w-full border-gray-300 rounded" />
            @error('location_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="quantity" class="block text-gray-700">Quantity</label>
            <input type="number" id="quantity" wire:model="quantity" class="mt-1 block w-full border-gray-300 rounded" />
            @error('quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $location->exists ? 'Update' : 'Create' }}</button>
    </form>
</div>
