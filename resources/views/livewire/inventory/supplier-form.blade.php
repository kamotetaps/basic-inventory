<div>
    <h1>{{ $supplier->exists ? 'Edit Supplier' : 'Add New Supplier' }}</h1>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" id="name" wire:model="supplier.name" class="mt-1 block w-full border-gray-300 rounded" />
            @error('supplier.name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="contact" class="block text-gray-700">Contact</label>
            <input type="text" id="contact" wire:model="supplier.contact" class="mt-1 block w-full border-gray-300 rounded" />
            @error('supplier.contact') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Phone</label>
            <input type="text" id="phone" wire:model="supplier.phone" class="mt-1 block w-full border-gray-300 rounded" />
            @error('supplier.phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" wire:model="supplier.email" class="mt-1 block w-full border-gray-300 rounded" />
            @error('supplier.email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700">Address</label>
            <textarea id="address" wire:model="supplier.address" class="mt-1 block w-full border-gray-300 rounded"></textarea>
            @error('supplier.address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $supplier->exists ? 'Update' : 'Create' }}</button>
    </form>
</div>
