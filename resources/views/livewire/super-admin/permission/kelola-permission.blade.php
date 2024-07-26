@section('title', 'Kelola Permission')

<div class="flex-grow p-6 ml-64">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Permission</h1>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-md rounded mt-6">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center"><input type="checkbox" id="select-all"></th>
                <th class="w-2/4 py-3 px-4 uppercase font-semibold text-sm text-center"><button class="sort-button" data-column="name"><i class="fas fa-caret-down mr-2"></i> Permission</button></th>
                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Action</th>
            </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($data as $permission)
                <tr>
                    <td class="w-1/12 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                    <td class="w-2/4 py-2 px-4 text-center">{{ $permission->name }}</td>
                    <td class="w-1/4 py-2 px-4 text-center">
                        <button wire:navigate href = "{{ route('superadmin.permission.show-permission', $permission->id) }}" class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                        <button wire:navigate href = "{{ route('superadmin.permission.edit-permission', $permission->id) }}" class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                        <button wire:click="confirmDelete({{ $permission->id }})" class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

