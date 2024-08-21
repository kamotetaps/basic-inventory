<div class="p-4">
    <h1 class="text-lg font-bold mb-4">Item Assignments</h1>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Serial Number</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assigned At</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Picture</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($itemAssignments as $assignment)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $assignment->item->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $assignment->user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $assignment->serial_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $assignment->assigned_at->format('Y-m-d') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ ucfirst($assignment->status) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($assignment->photo)
                            <img src="{{ asset('storage/' . $assignment->photo) }}" alt="Photo" class="w-20 h-20 object-cover">
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
