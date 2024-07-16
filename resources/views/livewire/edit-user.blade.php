@section('title', 'Edit User')

<div class="flex-grow p-6 ml-64">
    <div class="bg-white p-8 rounded shadow-md w-full ">
        <h1 class="text-3xl font-bold mb-10">Input User</h1>
        <form wire:submit.prevent="update">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
                <input
                    class="shadow {{ $errors->has('name') ? 'border-red-500' : 'border  text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" id="nama" type="text" wire:model="name" placeholder="masukkan nama">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600 peer-invalid:block">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input
                    class="shadow {{ $errors->has('email') ? 'border-red-500' : 'border  text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" id="email" type="email" wire:model="email" placeholder="masukkan email">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 peer-invalid:block">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <div x-data="{ showPassword: false }" class="relative">
                    <input type="password"
                           x-bind:type="showPassword ? 'text' : 'password'"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-10"
                           name="password" wire:model="password" placeholder="masukkan password">
                    <button type="button"
                            x-on:click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-700 focus:outline-none">
                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="374151" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0"/></svg>
                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="374151" d="M2 5.27L3.28 4L20 20.72L18.73 22l-3.08-3.08c-1.15.38-2.37.58-3.65.58c-5 0-9.27-3.11-11-7.5c.69-1.76 1.79-3.31 3.19-4.54zM12 9a3 3 0 0 1 3 3a3 3 0 0 1-.17 1L11 9.17A3 3 0 0 1 12 9m0-4.5c5 0 9.27 3.11 11 7.5a11.8 11.8 0 0 1-4 5.19l-1.42-1.43A9.86 9.86 0 0 0 20.82 12A9.82 9.82 0 0 0 12 6.5c-1.09 0-2.16.18-3.16.5L7.3 5.47c1.44-.62 3.03-.97 4.7-.97M3.18 12A9.82 9.82 0 0 0 12 17.5c.69 0 1.37-.07 2-.21L11.72 15A3.064 3.064 0 0 1 9 12.28L5.6 8.87c-.99.85-1.82 1.91-2.42 3.13"/></svg>
                    </button>
                </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 peer-invalid:block">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role</label>
                <select name="role" id="role" wire:model="role" class="shadow {{ $errors->has('role') ? 'border-red-500' : 'border text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                @error('role')
                    <p class="mt-2 text-sm text-red-600 peer-invalid:block">{{ $message }}</p>
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