@section('title', 'Edit User')

<div class="flex-grow p-6 ml-64">
    <div class="bg-white p-8 rounded shadow-md w-full">
        <h1 class="text-3xl font-bold mb-10">Edit User {{ $name }}</h1>
        <form wire:submit.prevent="update">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
                <input
                    wire:model="name"
                    class="shadow {{ $errors->has('name') ? 'border-red-500' : 'border text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="masukkan nama">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input
                    wire:model="email"
                    class="shadow {{ $errors->has('email') ? 'border-red-500' : 'border text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="masukkan email">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role</label>
                <select
                    wire:model="role"
                    id="role" class="shadow {{ $errors->has('role') ? 'border-red-500' : 'border text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                @error('role')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-start">
                <button
                    class="w-50 bg-black text-white px-5 py-2 rounded-lg mb-6 mt-2"
                    type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
