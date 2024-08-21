<div>
    <h1>{{ $item->exists ? 'Edit Item' : 'Add New Item' }}</h1>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" id="name" wire:model="item.name" class="mt-1 block w-full border-gray-300 rounded" />
            @error('item.name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="code" class="block text-gray-700">Code</label>
            <input type="text" id="code" wire:model="item.code" class="mt-1 block w-full border-gray-300 rounded" />
            @error('item.code') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price</label>
            <input type="number" id="price" wire:model="item.price" class="mt-1 block w-full border-gray-300 rounded" step="0.01" />
            @error('item.price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-gray-700">quantity</label>
            <input type="number" id="quantity" wire:model="item.quantity" class="mt-1 block w-full border-gray-300 rounded" step="0.01" />
            @error('item.quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700">Category</label>
            <select id="category_id" wire:model="item.category_id" class="mt-1 block w-full border-gray-300 rounded">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('item.category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $item->exists ? 'Update' : 'Create' }}</button>
    </form>
</div>
