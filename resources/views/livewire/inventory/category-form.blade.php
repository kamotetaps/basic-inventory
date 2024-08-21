<div>
    <h1>{{ $category->exists ? 'Edit Category' : 'Add New Category' }}</h1>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="item_name" class="block text-gray-700">Item Name</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full border-gray-300 rounded" />
            @error('item_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea id="description" wire:model="description" class="mt-1 block w-full border-gray-300 rounded"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $category->exists ? 'Update' : 'Create' }}</button>
    </form>
</div>
