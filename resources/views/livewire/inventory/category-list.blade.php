<div>
    <h1>Category List</h1>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $category->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $category->description }}</td>
                    <td class="py-2 px-4 border-b">
                        <button wire:click="edit({{ $category->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="delete({{ $category->id }})" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('category.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Category</a>
    </div>
</div>
