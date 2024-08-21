<div class="p-4">
    <h1 class="text-lg font-bold mb-4">{{ $isEdit ? 'Edit Item Assignment' : 'Create Item Assignment' }}</h1>

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="item_id" class="block text-sm font-medium text-gray-700">Item</label>
            <select id="item_id" wire:model.defer="itemAssignment.item_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">Select an item</option>
                @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('itemAssignment.item_id') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="user_id" class="block text-sm font-medium text-gray-700">User</label>
            <select id="user_id" wire:model.defer="itemAssignment.user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">Select a user</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('itemAssignment.user_id') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="serial_number" class="block text-sm font-medium text-gray-700">Serial Number</label>
            <input id="serial_number" type="text" wire:model.defer="itemAssignment.serial_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('itemAssignment.serial_number') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="assigned_at" class="block text-sm font-medium text-gray-700">Assigned At</label>
            <input id="assigned_at" type="date" wire:model.defer="itemAssignment.assigned_at" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('itemAssignment.assigned_at') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" wire:model.defer="itemAssignment.status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="assigned">Assigned</option>
                <option value="in_use">In Use</option>
                <option value="returned">Returned</option>
                <option value="in_repair">In Repair</option>
            </select>
            @error('itemAssignment.status') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
            <input id="photo" type="text" wire:model.defer="itemAssignment.photo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('itemAssignment.photo') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Save</button>
        </div>
    </form>
</div>
