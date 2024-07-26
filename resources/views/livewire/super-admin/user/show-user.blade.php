@section('title', 'Show User')

<div class="flex-grow p-6 ml-64">
    <div class="bg-white p-8 rounded shadow-md w-full ">
        <h1 class="text-3xl font-bold mb-10">Show User {{ $name }}</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
                <input
                    class="shadow border  text-gray-700 appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" id="nama" type="text" wire:model="name" @readonly(true) @disabled(true)>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input
                    class="shadow border  text-gray-700 appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" id="email" type="email" wire:model="email" @readonly(true) @disabled(true)>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role</label>
                <input
                    wire:model="role"
                    class="shadow border  text-gray-700 appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    role="role" id="nama" type="text" @readonly(true) @disabled(true)>
            </div>
    </div>
</div>
